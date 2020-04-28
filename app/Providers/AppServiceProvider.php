<?php

namespace App\Providers;

use App\client;
use App\contact;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use App\service;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        Schema::defaultStringLength(191);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $client=client::all();
        $con=contact::find(1);

        return view()->share(['client'=>$client,'con'=>$con]);
    }
}
