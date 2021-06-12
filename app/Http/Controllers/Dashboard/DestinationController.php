<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\DestinationRequest;
use App\Models\Destination;
use App\Models\Region;
use Illuminate\Http\Request;

class DestinationController extends Controller
{
    /**
     * @param Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index(Request  $request)
    {
        $destinations = Destination::when($request->get('search'), function ($query) use($request){
            return $query->where(function ($q) use ($request){
                return $q->where('name', 'LIKE', '%' . $request->get('search') . '%');
            });
        })->sortable(['id' => 'desc'])->paginate(m_per_page());
        return view('dashboard.destinations.index', compact('destinations'));
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        $regions = Region::pluck('name', 'id')->toArray();
        return view('dashboard.destinations.create', compact('regions'));
    }

    /**
     * @param DestinationRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(DestinationRequest $request)
    {
        $data = $request->all();
        Destination::create($data);
        flash()->success('Destination Created');
        return redirect()->route('destinations.index');
    }

    /**
     * @param Destination $destination
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function show(Destination $destination)
    {
        return view('dashboard.destinations.show', compact('destination'));
    }

    /**
     * @param Destination $destination
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit(Destination $destination)
    {
        $regions = Region::pluck('name', 'id')->toArray();
        return view('dashboard.destinations.edit',  compact('destination', 'regions'));
    }

    /**
     * @param $destination
     * @param DestinationRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Destination $destination, DestinationRequest $request)
    {
        $data = $request->all();

        $destination->update($data);
        flash()->success('Destination Updated');
        return redirect()->route('destinations.index');
    }

    /**
     * @param Destination $destination
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Destination $destination)
    {
        try {
            Destination::destroy($destination->id);
            flash()->success('Destination Deleted');
        } catch (\Throwable $exception) {
            flash()->warning('You can not delete this destination');
        }
        return redirect()->route('destinations.index');
    }
}
