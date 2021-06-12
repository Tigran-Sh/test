<?php

namespace App\Providers;

use App\Language;
use App\Menus;
use App\Models\ExtraService;
use App\Models\ExtraServiceType;
use App\Models\Package;
use App\Models\PackageType;
use App\Setting;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer(['dashboard.layouts.app', 'layouts.app'], function($view){
            $_package_types = PackageType::with('data')->get();
            $_extra_service_types = ExtraServiceType::with('data')->get();
            $view->with([
                '_package_types' => $_package_types,
                '_extra_service_types' => $_extra_service_types,
            ]);
        });
    }
}
