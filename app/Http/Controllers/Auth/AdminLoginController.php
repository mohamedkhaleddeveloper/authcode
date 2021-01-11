<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\App;
class AdminLoginController extends Controller
{
     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest:admin')->except('logout');
    }

    public function showLoginForm()
    {
        return view('auth.admin-login');
    }

    public function login(Request $request)
    {
        // Validate from data
        $this->validate($request , 
            [
                'email' => 'required|string|email',
                'password' => 'required|string|min:8'
            ]  
        ); 
        // Attempt to login as admin
        if(Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember))
        {
            return redirect()->intended(route('admin.dashboard'));
        }

        // if unsuccessful then redirect back to login page with email and remember feilds
        return redirect()->back()->withInput($request->only('email','password','remember')); 
    }

    public function logout(Request $request)
    {   
        Auth::guard('admin')->logout();
        return redirect('admin/');
    }
}
