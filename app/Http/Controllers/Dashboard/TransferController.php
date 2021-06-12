<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\TransferRequest;
use App\Models\Destination;
use App\Models\ExtraServiceType;
use App\Models\Transfer;
use App\Models\TransferData;
use App\Models\User;
use App\Services\DataService;
use App\Traits\OneTimePasswordTrait;
use Exception;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

class TransferController extends Controller
{
    use OneTimePasswordTrait;

    /**
     * @param Request $request
     * @return Application|Factory|View
     */
    public function index(Request $request)
    {
        $transfers = Transfer::sortable(['id' => 'desc'])->paginate(m_per_page());
        return view('dashboard.transfers.index', compact('transfers'));
    }

    /**
     * @return Application|Factory|View
     */
    public function create()
    {
        $destinations = Destination::pluck('name', 'id')->toArray();
        $types = ExtraServiceType::pluck('name', 'id')->toArray();
        $contacts = User::contact()->get()->pluck('full_name', 'id');
        return view('dashboard.transfers.create', compact('destinations', 'types', 'contacts'));
    }

    /**
     * @param TransferRequest $request
     * @return RedirectResponse
     * @throws Exception
     */
    public function store(Request $request): RedirectResponse
    {
        $data = $request->all();
        $transfer = Transfer::create($data);
        $contact = $transfer->load('user');
        //Check if user should change password
        $this->sendOneTimePasswordChangeEmail($contact);
        DataService::saveData($data, $transfer, new TransferData());
        flash()->success('Transfer Created');
        return redirect()->route('transfers.index');
    }

    /**
     * @param Transfer $transfer
     * @return Application|Factory|View
     */
    public function show(Transfer $transfer)
    {
        $transfer->load('user');
        return view('dashboard.transfers.show', compact('transfer'));
    }

    /**
     * @param Transfer $transfer
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit(Transfer $transfer)
    {
        $data = TransferData::where('transfer_id', $transfer->id)->get()->keyBy('lang');
        $destinations = Destination::pluck('name', 'id')->toArray();
        $types = ExtraServiceType::pluck('name', 'id')->toArray();
        $contact = $transfer->load('user');
        $contact = $contact->user()->first();
        $contacts = User::contact()->get()->pluck('full_name', 'id');
        return view('dashboard.transfers.edit', compact('transfer', 'types', 'destinations', 'contact', 'contacts', 'data'));
    }

    /**
     * @param $transfer
     * @param TransferRequest $request
     * @return RedirectResponse
     */
    public function update(Transfer $transfer, Request $request)
    {
        $data = $request->all();
        $transfer->update($data);
        DataService::saveData($data, $transfer, new TransferData());
        flash()->success('Transfer Updated');
        return redirect()->route('transfers.index');
    }

    /**
     * @param Transfer $transfer
     * @return RedirectResponse
     */
    public function destroy(Transfer $transfer)
    {
        try {
            Transfer::destroy($transfer->id);
            flash()->success('Transfer Deleted');
        } catch (\Throwable $exception) {
            flash()->warning('You can not delete this transfer!');
        }
        return redirect()->route('transfers.index');
    }
}
