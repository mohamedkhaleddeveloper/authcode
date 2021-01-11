<?php

namespace App\Http\Controllers;

use App\products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Auth;
class ProductsController extends Controller
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
        $products = products::latest()->paginate(5);
        return view('products.index',compact('products'))->with('i',(request()->input('page',1)-1)*5);
    }
    public function codes()
    {
        //
        App::setlocale(Auth::user()->lang);
        $products = client::latest()->paginate(5);
        return view('products.index',compact('products'))->with('i',(request()->input('page',1)-1)*5);
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
        return view('products.create');
        
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
  
        products::create($request->all());
   
        return redirect()->route('products.index')
                        ->with('success','Product created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\client  $client
     * @return \Illuminate\Http\Response
     */
    public function show(products $product)
    {
        //
        //dd($client);
        App::setlocale(Auth::user()->lang);
        return view('products.show',compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\client  $client
     * @return \Illuminate\Http\Response
     */
    public function edit(products $product)
    {
        //
        App::setlocale(Auth::user()->lang);
        return view('products.edit',compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\client  $client
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, products $product)
    {
        //
        App::setlocale(Auth::user()->lang);
        $request->validate([
            'name_ar' => 'required',
            'name_en' => 'required',
        ]);
  
        $product->update($request->all());
  
        return redirect()->route('products.index')
                        ->with('success','Product updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\client  $client
     * @return \Illuminate\Http\Response
     */
    public function destroy(products $product)
    {
        //
        $product->delete();
  
        return redirect()->route('products.index')
                        ->with('success','Product deleted successfully');
    }
}
