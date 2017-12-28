<?php

namespace wjs\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function signin(Request $request)
    {
       /*$validator =  Validator::make($request->all(), [
                'email' => 'required',
                'password' => 'required'
            ]);*/

        $this->validate($request, [
            'email' => 'required',
            'password' => 'required'
        ]);  

        if(!Auth::attempt(['email'=>$request['email'], 'password'=>$request['password']])) {
            
            return back()->withErrors([
                'message' => 'Username/Password does not macth'
            ]);
        }

            return redirect()->route('dashboard');
       
    }


    public function signout() {
        Auth::logout();
        return redirect()->route('homepage');

    }

   
}
