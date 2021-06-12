<?php

namespace App\Http\Controllers;

use App\Models\ExtraServiceType;
use App\Models\Package;
use App\Models\Region;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $packages = Package::with('data')->inRandomOrder()->take(6)->get();
        $extra_service_types = ExtraServiceType::with('data')->get();
        $regions = Region::all();
        return view('home', compact('packages', 'regions', 'extra_service_types'));
    }


}
