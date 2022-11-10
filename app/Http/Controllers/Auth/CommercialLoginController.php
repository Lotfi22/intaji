<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;
use Auth;

class CommercialLoginController extends Controller
{


    public function showLoginForm()
    {
        return view('auth.commercial-login');
    }

    public function login(Request $request)
    {
        
        // Attente d'authentification 
        
        if(Auth::guard('commercial')->attempt(['email' => $request->username, 'password' => $request->password], $request->remember))
        {

            // Si c'est réussi, redirection vers le dashboard
            return redirect()->intended(route('commercial.home'));
        }        

        // sinon redirection vers le login
        return redirect()->back()->withInput($request->only('email','remember'));
    }
   

    //
}
