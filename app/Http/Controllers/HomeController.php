<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Auth;
use App\User;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        App::setlocale(Auth::user()->lang);
        return view('welcome.user');
    }

    public function Dashboard()
    {
        App::setlocale(Auth::user()->lang);
        return view('welcome.user');
    }

    public function lang()
    {
        if(Auth::user()->lang == 'ar'){
            $email = Auth::user()->email;
            User::where('email',$email)->update(['lang'=>'en']);
        }else{
            $email = Auth::user()->email;
            User::where('email',$email)->update(['lang'=>'ar']);
        }
        return redirect()->route('Dashboard');
    }
}
