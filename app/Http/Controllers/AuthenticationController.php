<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthenticationController extends Controller
{
    public function viewlogin(){
        return view('backend.login');
    }

    public function afterlogin(Request $request){

        $credentials=$request->except('_token');
        $check=Auth::attempt($credentials);
        // dd($check);


        if($check)
        {

            
            return redirect()->route('dashboard');

        }
        else{



            return redirect()->back();

        }
    }


}
