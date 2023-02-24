<?php

namespace App\Providers;

use App\Models\Perkebunan\Perkebunan;
use App\Observers\Perkebunan\PerkebunanObserver;
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
        Perkebunan::observe(PerkebunanObserver::class);
    }
}
