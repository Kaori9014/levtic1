<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use illuminate\Pagination\Paginator;

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
    public function boot()
    {
         
         \URL::forceScheme('https');
         $this->app['request']->server->set('HTTPS','on');
         
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    
}
