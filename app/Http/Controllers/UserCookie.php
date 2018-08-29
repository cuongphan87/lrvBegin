<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;


class UserCookie extends Controller {
    public function setCookie(Request $request){
       $minutes = 1;
       $response = new Response("Hello Word");
       $response->withCookie(cookie('name','virat',$minutes));
       return $response;    
    }
    
   
    
    public function getCookie(Request $request){
        $value = $request->cookie('name');
        var_dump($value);
    }
}