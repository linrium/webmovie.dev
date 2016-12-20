<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Auth;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // this issue is caused by Auth::user() hasn't been initialized yet
        view()->composer('*', function($view){
            $this->currentUser = [
                'role' => 'notuser'
            ];
            if(Auth::user())
                $this->currentUser = Auth::user()->toArray();
            $view->with('currentUser', $this->currentUser);
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
