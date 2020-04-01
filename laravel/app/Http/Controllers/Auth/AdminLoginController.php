<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class AdminLoginController extends Controller
{
    public function __construct()
    {
      $this->middleware('guest:admin');
    }

    public function showLoginForm()
    {
      return view('auth.admin-login');
    }

    public function login(Request $request)
    {
      //Validate the form data
      $this->validate($request,[
        'email' => 'required|email',
        'password' => 'required|min:10'
      ]);

      //attempt to log the user in
      if(Auth::guard('admin')->attempt(['email'=>$request->email, 'password'=>$request->password],$request->remember))
      {
        //if successful, then redirect to their intended location
        return view('/admin');
      }
      else
      {
        //if unsuccessful, then redirect back to the login with the form data

        return "unsuccessful";
        //return redirect()->back()->withInput($request->only('email'));
      }

    }
}
