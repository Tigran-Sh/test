<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\MeetingRoomRequest;
use App\Http\Requests\MeetingRoomUpdateRequest;
use App\Models\Hotel;
use App\Models\MeetingRoomData;
use App\Models\MeetingRoom;
use App\Services\DataService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

class MeetingRoomController extends Controller
{
    /**
     * @param Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index(Request  $request)
    {
        $meeting_rooms = MeetingRoom::when($request->get('search'), function ($query) use($request){
            return $query->where(function ($q) use ($request){
                return $q->where('name', 'LIKE', '%' . $request->get('search') . '%');
            });
        })->sortable(['id' => 'desc'])->paginate(m_per_page());
        return view('dashboard.meeting_rooms.index', compact('meeting_rooms'));
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        $hotels = Hotel::pluck('name', 'id')->toArray();
        return view('dashboard.meeting_rooms.create', compact('hotels'));
    }

    /**
     * @param MeetingRoomRequest $request
     * @return RedirectResponse
     */
    public function store(MeetingRoomRequest $request)
    {
        $data = $request->all();
        $meeting_room = MeetingRoom::create($data);
        DataService::saveData($data, $meeting_room, new MeetingRoomData());
        flash()->success('Meeting Room Created');
        return redirect()->route('meeting_rooms.index');
    }

    /**
     * @param MeetingRoom $meeting_room
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function show(MeetingRoom $meeting_room)
    {
        return view('dashboard.meeting_rooms.show', compact('meeting_room'));
    }

    /**
     * @param MeetingRoom $meeting_room
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit(MeetingRoom $meeting_room)
    {
        $hotels = Hotel::pluck('name', 'id')->toArray();
        $data = [];
        foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties){
            $data[$localeCode] = MeetingRoomData::where('meeting_room_id', $meeting_room->id)->where('lang', $localeCode)->first();
        }
        return view('dashboard.meeting_rooms.edit',  compact('meeting_room', 'hotels', 'data'));
    }

    /**
     * @param MeetingRoom $meeting_room
     * @param MeetingRoomUpdateRequest $request
     * @return RedirectResponse
     */
    public function update(MeetingRoom $meeting_room, MeetingRoomUpdateRequest $request)
    {
        $data = $request->all();
        $meeting_room->update($data);
        DataService::saveData($data, $meeting_room, new MeetingRoomData());
        flash()->success('Meeting Room Updated');
        return redirect()->route('meeting_rooms.index');
    }

    /**
     * @param MeetingRoom $meeting_room
     * @return RedirectResponse
     */
    public function destroy(MeetingRoom $meeting_room)
    {
        try {
            MeetingRoom::destroy($meeting_room->id);
            flash()->success('Meeting Room Deleted');
        } catch (\Throwable $exception) {
            flash()->warning('You can not delete this meeting room!');
        }
        return redirect()->route('meeting_rooms.index');
    }
}
