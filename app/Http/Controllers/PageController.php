<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactUsRequest;
use App\Models\Page;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PageController extends Controller
{
    /**
     * @param $slug
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function page($slug)
    {
        $page = Page::with('data')->whereSlug($slug)->firstOrFail();
        return view('pages.page', compact('page'));
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function contact()
    {
        return view('pages.contact');
    }

    /**
     * @param ContactUsRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function contactSubmit(ContactUsRequest $request)
    {
        Mail::send('emails.contact', ['data' => $request->all()], function ($m){
            $m->to(config('mail.contact'))->subject(__('New Contact Message'));
        });
        flash()->success(__('Message Sent'));
        return back();
    }
}
