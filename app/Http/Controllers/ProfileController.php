<?php

namespace App\Http\Controllers;

use App\Http\Requests\PasswordRequest;
use App\Http\Requests\ProfileRequest;
use App\Services\FileService;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    /**
     * @return Application|Factory|View
     */
    public function index()
    {
        return view('profile.index');
    }


    /**
     * @param ProfileRequest $request
     * @return RedirectResponse
     */
    public function update(ProfileRequest $request): RedirectResponse
    {
        $companyName = $request->all()['company_name'] ?? '';
        $user = Auth::user();
        $user->update($request->all());
        if ($companyName) {
            $user->company()->update(['name' => $companyName]);
        }
        flash()->success(__('Profile Updated'));
        return back();
    }


    /**
     * @param Request $request
     * @return RedirectResponse
     */
    public function image(Request $request): RedirectResponse
    {
        $user = Auth::user();
        $company = $user->company;
        $file_service = new FileService();
        $file_service->saveImage($request->file('image'), $company, 'companies');

        flash()->success(__('Company image updated'));
        return back();
    }


    /**
     * @return Application|Factory|View
     */
    public function bookings()
    {
        return view('profile.bookings.index');
    }


    /**
     * @return Application|Factory|View
     */
    public function bookingsDetails()
    {
        return view('profile.bookings.show');
    }


    /**
     * @return Application|Factory|View
     */
    public function password()
    {
        return view('profile.password');
    }


    /**
     * @param PasswordRequest $request
     * @return RedirectResponse
     */
    public function passwordUpdate(PasswordRequest $request): RedirectResponse
    {
        if (!Hash::check($request->get('current_password'), Auth::user()->password)) {
            flash()->warning(__('The password does not match.'));
            return back();
        }
        $user = Auth::user();
        if ($user->should_change_password) {
            $user->should_change_password = 0;
        }
        $user->update(['password' => Hash::make($request->get('password'))]);

        flash()->success(__('Password Updated'));
        return redirect()->route('profile.index');
    }


    /**
     * @return Application|Factory|View
     */
    public function notifications()
    {
        return view('profile.notifications');
    }


    /**
     * @return Application|Factory|View
     */
    public function comparison()
    {
        return view('profile.bookings.comparison');
    }


    /**
     * @return Application|Factory|View
     */
    public function choosed()
    {
        return view('profile.bookings.choosed');
    }


}
