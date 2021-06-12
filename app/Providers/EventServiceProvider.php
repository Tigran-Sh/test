<?php

namespace App\Providers;

use App\Models\ExtraService;
use App\Models\Hotel;
use App\Observers\ExtraServiceObserver;
use App\Observers\HotelObserver;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        Hotel::observe(HotelObserver::class);
        ExtraService::observe(ExtraServiceObserver::class);
    }
}
