<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\UserRegister;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class LoginRegisterController extends Controller
{
    //
    function userregister(Request $request)
    {
        $rules = array(
            'username'=> 'required',
            'email'=> 'email | required',
            'password'=> 'required|min:6'
        ); 
        $validation = Validator::make($request->all(),$rules);
        if($validation->fails())
        {
            return redirect()->back()->withErrors($validation)->withInput();
        }
        
        $users = new UserRegister();
        $users->username=$request->username;
        $users->email=$request->email;
        $users->password= bcrypt($request->password);
        if(!$users->save())
        {
            return "Register Failed";
        }
        return redirect('login');
    }
    function login(Request $request)
    {
        $rules = array(
            'username'=> 'required',
            'password'=> 'required',
        );

        $validation = Validator::make($request->all(),$rules);
        if($validation->fails())
        {
            return redirect()->back()->withErrors($validation)->withInput();
        }

        $users = UserRegister::where('username', $request->username)->first();
        if(!$users || !Hash::check($request->password, $users->password))
        {
            return redirect()->back()->withErrors($validation)->withInput();
        }

        Session::put('username', $users->username);

        return redirect('/');
    }
}
