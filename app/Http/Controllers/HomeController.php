<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function showLogin() {
        return view('admin.login');
    }

    public function guard() {
        return Auth::guard('role');
    }

    public function doLogin(LoginRequest $request) {
        $userdata = [
            'email' => $request->email,
            'password' => $request->password
        ];

        if(Auth::attempt($userdata)) {
            return redirect()->route('year.index');
        } else {
            return redirect()->route('showLogin');
        }
    }

    public function doLogout() {
        Auth::logout();
        return redirect()->route('showLogin');
    }
}
