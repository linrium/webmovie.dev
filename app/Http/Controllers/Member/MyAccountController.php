<?php

namespace App\Http\Controllers\Member;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

use Auth;
use App\User;
use Hash;

class MyAccountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = [
            'role' => 'notuser'
        ];
        if(Auth::user())
            $user = Auth::user()->toArray();

        return view('member.myaccount.index', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id)->toArray();

        return view('member.myaccount.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'txtName' => 'required',
        ], [
            'txtName.required' => 'Please enter old password',
        ]);

        $user = User::find($id);
        $user->username = $request->txtName;
        $user->save();

        return redirect()->route('myaccount.index')->with([
            'flash_level'=>'success',
            'flash_message'=>'Username updated succesfully'
        ]);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editPassword($id)
    {
        $user = User::find($id)->toArray();

        return view('member.myaccount.editPassword', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updatePassword(Request $request, $id)
    {

        $this->validate($request, [
            'txtOldPassword' => 'required',
            'txtNewPassword' => 'required|min:6',
            'txtNewRepassword' => 'required|min:6|same:txtNewPassword'
        ], [
            'txtOldPassword.required' => 'Please enter old password',
            'txtNewPassword.required'   => 'Please enter password',
            'txtNewPassword.min'        => 'Password must least 6 character',
            'txtNewRepassword.min'      => 'Repassword must least 6 character',
            'txtNewRepassword.required' => 'Please enter repassword',
            'txtNewRepassword.same'     => 'Repassword don\'t match'
        ]);

        if(Hash::check($request->txtOldPassword, Auth::user()->password)) {
            $user = User::find($id);
            $user->password = Hash::make($request->txtNewPassword);
            $user->save();

            return redirect()->route('myaccount.index')->with([
                'flash_level'=>'success',
                'flash_message'=>'Password updated succesfully'
            ]);
        } else {
            return redirect()->route('myaccount.editPassword', $id)->with([
                'flash_level'=>'danger',
                'flash_message'=>'Old password not match'
            ]);
        }

        

    }
}
