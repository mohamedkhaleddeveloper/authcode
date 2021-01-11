<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Auth;
use App\Admin;
class AdminController extends Controller
{
    /**
    * Create a new controller instance.
    *
    * @return void
    */
    public function __construct()
    {
        $this->middleware('auth:admin');
        
    }

    /**
    * Show the application dashboard.
    *
    * @return \Illuminate\Contracts\Support\Renderable
    */
    public function index()
    {
        App::setlocale(Auth::user()->lang);
        return view('admin.Dashboard');
    }

    public function lang()
    {
        if(Auth::user()->lang == 'ar'){
            $email = Auth::user()->email;
            Admin::where('email',$email)->update(['lang'=>'en']);
        }else{
            $email = Auth::user()->email;
            Admin::where('email',$email)->update(['lang'=>'ar']);
        }
        
        return redirect()->route('admin.dashboard');
    }
}
