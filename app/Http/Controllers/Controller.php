<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Auth;


class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    function __construct() {
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
}
