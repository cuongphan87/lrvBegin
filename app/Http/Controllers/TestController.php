<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as Controller;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;

class TestController extends Controller
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    
//     public function __construct(){
//         $this->middleware('Second');
//     }
    
    public function showPath(Request $request){
        $uri = $request->path();
        echo '<br>URI: '.$uri;
        
        $url = $request->url();
        echo '<br>';
        
        echo 'URL: '.$url;
        $method = $request->method();
        echo '<br>';
        
        echo 'Method: '.$method;
    }
    
}
