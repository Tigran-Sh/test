<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TranslationController extends Controller
{

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function searchKey(Request $request)
    {
        $keys = DB::table('ltm_translations')
            ->where('value', 'LIKE', '%' . $request->get('search') . '%')
            ->take('100')
            ->get();

        return view('translations._search', compact('keys'));
    }

}
