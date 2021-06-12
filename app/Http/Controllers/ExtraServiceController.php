<?php

namespace App\Http\Controllers;

use App\Models\ExtraService;
use App\Models\ExtraServiceType;
use Illuminate\Http\Request;

class ExtraServiceController extends Controller
{
    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $extra_services = ExtraService::with('price', 'data')->when(request()->get('type'), function ($query){
            return $query->where('extra_service_type_id', request()->get('type'));
        })->latest()->paginate(m_per_page());
        $types = ExtraServiceType::with('data')->get();
        return view('extra_services.index', compact('extra_services', 'types'));
    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function show($id)
    {
        $extra_service = ExtraService::findOrFail($id);
        return view('extra_services.show', compact('extra_service'));
    }
}
