<?php

namespace wjs\Http\Controllers;
use Illuminate\Http\Request;

use wjs\User;
// use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'fullname' => 'required|max:120',
            'email' => 'required|unique:users',
            'password' => 'required|confirmed',
            'password_confirmation' => 'required' 
        ]);

        $fullname = $request['fullname'];   
        $email = $request['email'];   
        $password = bcrypt($request['password']); 

        $user = new User();
        $user->fullname = $fullname;
        $user->email = $email;
        $user->password = $password;
        $user->save();

        return redirect()->route('homepage');
    }

   
}
