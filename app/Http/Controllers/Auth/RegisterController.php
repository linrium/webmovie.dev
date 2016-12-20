<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Hash;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = '/login';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function showRegistationForm() {
        return view('auth.register');
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    public function register(Request $request)
    {
        $messages = [
            'txtName.required'       => 'Please enter username',
            'txtEmail.required'      => 'Please enter email',
            'txtEmail.unique'        => 'Email is exists',
            'txtEmail.regex'         => 'Email syntax error',
            'txtPassword.required'   => 'Please enter password',
            'txtPassword.min'        => 'Password must least 6 character',
            'txtRepassword.min'      => 'Repassword must least 6 character',
            'txtRepassword.required' => 'Please enter repassword',
            'txtRepassword.same'     => 'Repassword don\'t match'
        ];

        $this->validate($request, [
            'txtName'       => 'required|max:255|unique',
            'txtEmail'      => 'required|max:255|unique:users,email',
            'txtPassword'   => 'required|min:6',
            'txtRepassword' => 'required|min:6|same:txtPassword'
        ], $messages);

        $user = new User();
        $user->username = $request->txtName;
        $user->email = $request->txtEmail;
        $user->password = Hash::make($request->txtPassword);
        $user->role = 'member';
        $user->remember_token = $request->_token;
        $user->save();

        return redirect()->route('login');
    }
}
