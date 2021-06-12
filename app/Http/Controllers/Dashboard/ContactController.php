<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContactRequest;
use App\Models\ContactData;
use App\Models\User;
use App\Services\DataService;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

class ContactController extends Controller
{
    /**
     * @param Request $request
     * @return Application|Factory|View
     */
    public function index(Request $request)
    {
        $search = $request->get('search') ?? '';
        $contacts = User::when($search, function ($query) use ($request, $search) {
            $query->where(function ($q) use ($request, $search) {
                $q->where(DB::raw("CONCAT('first_name','last_name')"), 'LIKE', '%' . $search . '%')
                    ->orWhere('email', 'LIKE', '%' . $search . '%')
                    ->orWhere('phone', 'LIKE', '%' . $search . '%')
                    ->orWhereHas('data', function ($qD) use ($search) {
                        $qD->where('description', 'LIKE', '%' . $search . '%');
                    });
            });
        })
            ->where('role', User::ROLE_CONTACT)
            ->sortable(['id' => 'desc'])->paginate(m_per_page());
        return view('dashboard.contacts.index', compact('contacts'));
    }

    /**
     * @return Application|Factory|View
     */
    public function create()
    {
        return view('dashboard.contacts.create');
    }

    /**
     * @param ContactRequest $request
     * @return RedirectResponse
     * @throws \Exception
     */
    public function store(ContactRequest $request): RedirectResponse
    {
        $data = $request->validated();
        $contact = User::create([
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'email' => $data['email'],
            'phone' => $data['phone'],
            'role' => User::ROLE_CONTACT,
            'password' => Hash::make(random_int(100000, 999999)),
            'should_change_password' => 1
        ]);
        DataService::saveData($data, $contact, new ContactData());
        flash()->success('Contact Created');
        return redirect()->route('contacts.index');
    }

    /**
     * @param User $contact
     * @return Application|Factory|View
     */
    public function show(User $contact)
    {
        return view('dashboard.contacts.show', compact('contact'));
    }

    /**
     * @param User $contact
     * @return Application|Factory|View
     */
    public function edit(User $contact)
    {
        $data = [];
        foreach (LaravelLocalization::getSupportedLocales() as $localeCode => $properties) {
            $data[$localeCode] = ContactData::where('user_id', $contact->id)->where('lang', $localeCode)->first();
        }
        return view('dashboard.contacts.edit', compact('contact', 'data'));
    }

    /**
     * @param User $contact
     * @param ContactRequest $request
     * @return RedirectResponse
     */
    public function update(User $contact, ContactRequest $request): RedirectResponse
    {
        $data = $request->all();
        $contact->update($data);
        DataService::saveData($data, $contact, new ContactData());
        flash()->success('Contact Updated');
        return redirect()->route('contacts.index');
    }

    /**
     * @param User $contact
     * @return RedirectResponse
     */
    public function destroy($id): RedirectResponse
    {
        try {
            User::find($id)->delete();
            flash()->success('Contact Deleted');
        } catch (\Throwable $exception) {
            flash()->warning('You can not delete this contact!');
        }
        return redirect()->route('contacts.index');
    }
}
