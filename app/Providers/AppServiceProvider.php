<?php

namespace App\Providers;

use App\Site;
use App\Slider;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

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
        Schema::defaultStringLength(191);

        View::composer('*', function ($view) {
            $site = Site::first();
            $view->with('_SITE', $site);
        });

        View::composer('*', function ($view) {
            $slider = Slider::first();
            $view->with('_SLIDER', $slider);
        });


    }
}
