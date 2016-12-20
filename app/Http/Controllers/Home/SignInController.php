<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SignInController extends Controller
{
    public function create() {
        return view('home.signin');
    }

    public function store(UserRequest $request) {
        $user = new User();
        $user->username = $request->txtName;
        $user->email = $request->txtEmail;
        $user->password = Hash::make($request->txtPassword);
        $user->role = 'member';
        $user->remember_token = $request->_token;
        $user->save();

        return redirect()->route('home.index')->with([
            'flash_level'=>'success',
            'flash_message'=>'Account created successfully'
        ]);
    }
}
