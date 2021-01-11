<?php

namespace App\Http\Controllers;

use App\client;
use App\code;
use App\products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Hash;
use Auth;
class ClientController extends Controller
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
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        App::setlocale(Auth::user()->lang);
        $clients = client::latest()->paginate(5);
        return view('clients.index',compact('clients'))->with('i',(request()->input('page',1)-1)*5);
    }

   
    public function codes(client $client)
    {
        //
        App::setlocale(Auth::user()->lang);
        $codes = code::where('client_id', $client->id)->latest()->paginate(5);;
        $products = products::get();
        $client  = $client;
        return view('codes.index',compact('codes','client','products'))->with('i',(request()->input('page',1)-1)*5);
    }
   
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        App::setlocale(Auth::user()->lang);
        return view('clients.create');
        
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        App::setlocale(Auth::user()->lang);
        $request->validate([
            'name_ar' => 'required',
            'name_en' => 'required',
        ]);
  
        $client = client::create($request->all());
        $code =  md5(uniqid(rand(), true));
        $client->update(['code'=>$code]);
        return redirect()->route('clients.index')
                        ->with('success','Clients created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\client  $client
     * @return \Illuminate\Http\Response
     */
    public function show(client $client)
    {
        //
        //dd($client);
        App::setlocale(Auth::user()->lang);
        return view('clients.show',compact('client'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\client  $client
     * @return \Illuminate\Http\Response
     */
    public function edit(client $client)
    {
        //
        App::setlocale(Auth::user()->lang);
        return view('clients.edit',compact('client'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\client  $client
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, client $client)
    {
        //
        App::setlocale(Auth::user()->lang);
        $request->validate([
            'name_ar' => 'required',
            'name_en' => 'required',
        ]);
  
        $client->update($request->all());
  
        return redirect()->route('clients.index')
                        ->with('success','Client updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\client  $client
     * @return \Illuminate\Http\Response
     */
    public function destroy(client $client)
    {
        //
        $client->delete();
  
        return redirect()->route('clients.index')
                        ->with('success','Client deleted successfully');
    }
}
