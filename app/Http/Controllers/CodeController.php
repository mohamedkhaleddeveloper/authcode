<?php

namespace App\Http\Controllers;

use App\code;
use App\products;
use App\client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Hash;
use Auth;
class CodeController extends Controller
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
    }

    public function createcode(client $client)
    {
        //
        App::setlocale(Auth::user()->lang);
        $products = products::get();
        return view('codes.create',compact('client','products'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(client $client)
    {
        //
        App::setlocale(Auth::user()->lang);
        $products = products::get();
        return view('codes.create', compact('products','client'));
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
            'client_id' => 'required',
            'product_id' => 'required',
            'to' => 'required',
            'from' => 'required',
        ]);
        $code =  md5(uniqid(rand(), true));
        
        $codeupdate  = code::create($request->all());
        $codeupdate->update(['code'=>$code]);
        return redirect()->route('clients.codes',$request->client_id)
                        ->with('success','Code created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\code  $code
     * @return \Illuminate\Http\Response
     */
    public function show(code $code)
    {
        //
        App::setlocale(Auth::user()->lang);
        $client = client::where('id', $code->client_id)->first();
        $product = products::where('id', $code->product_id)->first();
        // dd($client->id);
        return view('codes.show',compact('client', 'product', 'code'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\code  $code
     * @return \Illuminate\Http\Response
     */
    public function edit(code $code)
    {
        //
        App::setlocale(Auth::user()->lang);
        $client = client::where('id', $code->client_id)->first();
        $products = products::get();
        //$product = products::where('id', $code->product_id)->first();
        // dd($client->id);
        return view('codes.edit',compact('client', 'products', 'code'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\code  $code
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, code $code)
    {
        //
        App::setlocale(Auth::user()->lang);
        $request->validate([
            'client_id' => 'required',
            'product_id' => 'required',
            'to' => 'required',
            'from' => 'required',
        ]);
        $code->update($request->all());
        return redirect()->route('clients.codes',$request->client_id)
        ->with('success','Code updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\code  $code
     * @return \Illuminate\Http\Response
     */
    public function destroy(code $code)
    {
        //
        App::setlocale(Auth::user()->lang);
        $code->delete();
        return redirect()->route('clients.codes',$code->client_id)
                        ->with('success','Code deleted successfully');
    }
}
