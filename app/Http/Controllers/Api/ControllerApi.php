<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\client;
use App\code;
class ControllerApi extends Controller
{
    //

    public function clientByCode($code)
    {
        //
        $clients = client::where('code', $code)->get();
        return response($clients);
    }
   
    public function clientByemail($email)
    {
        //
        $clients = client::where('email', $email)->get();
        return response($clients);
    }

    public function GetCodeByClientId($product_id, $client_id)
    {
        //
        $code = code::where('client_id', $client_id)->where('product_id', $product_id)->orderBy('id', 'DESC')->first();
        return response($code);
    }
}
