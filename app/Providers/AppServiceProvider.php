<?php

namespace App\Providers;

use Carbon\Carbon;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\ServiceProvider;
use Illuminate\Routing\UrlGenerator;

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
    public function boot(UrlGenerator $url)
    {
        config(['app.locale' => 'id']);
	    Carbon::setLocale('id');
        $tipe = explode(':',url('/'));

        //if(env('APP_ENV') !== 'local') { 
            $url->forceScheme($tipe[0]); 
        //}
    }
}
