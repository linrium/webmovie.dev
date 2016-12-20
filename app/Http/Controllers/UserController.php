<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use App\User;
use Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = User::select('id', 'username', 'email', 'role')->orderBy('id', 'DESC')->get()->toArray();

        return view('admin.user.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('admin.user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserRequest $request)
    {
        $user = new User();
        $user->username = $request->txtName;
        $user->email = $request->txtEmail;
        $user->password = Hash::make($request->txtPassword);
        $user->role = $request->radioRole;
        $user->remember_token = $request->_token;
        $user->save();

        return redirect()->route('user.index')->with([
            'flash_level'=>'success',
            'flash_message'=>'User created succesfully'
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id)->toArray();
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

        return view('admin.user.edit', compact('user'));
        // echo '<pre>';
        // print_r($user);
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
        $user = User::find($id);
        $user->username = $request->txtName;
        $user->email = $request->txtEmail;
        if($request->txtPassword == '')
            $user->password = $user->password;
        else
            $user->password = Hash::make($request->txtPassword);
        $user->role = $request->radioRole;
        $user->save();

        return redirect()->route('user.index')->with([
            'flash_level'=>'success',
            'flash_message'=>'User updated succesfully'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::destroy($id);

        return redirect()->route('user.index')->with([
            'flash_level'=>'success',
            'flash_message'=>'User deleted succesfully'
        ]);
    }
}
