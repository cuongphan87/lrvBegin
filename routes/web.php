<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


use Illuminate\Routing\Router;

Router::get('/', function () {
    return view('welcome');
});

Router::get('call-testcontroller','TestController@index');

Router::post('/TestController/path',[
//     'middleware' => 'FirstMiddleware',
    'uses' => 'TestController@showPath'
]);

Router::get('/register',function(){
    return view('register');
});
Router::post('/user/register',array('uses'=>'UserRegistration@postRegister'));

Router::get('cookie/set','UserCookie@setCookie');
Router::get('cookie/get','UserCookie@getCookie');

Router::get('/response_test', function() {
    echo "this is response test";
});

Router::get('/header', function() {
    return response('hello','200')->header('Content-type','text/html');
});
    
Router::get('/json', function() {
    return response()->json(['name' => 'cuong', 'tuoi' => '33']);
});

// Router::get('/test', function(){
//     return view('demo',['name2'=>'Cuong']);
// });

Router::get('/test2', function(){
    return view('demo');
});

Router::get('aa','TestController@index');

Router::get('/bbb', function() {
    return redirect()->action('TestController@index');
});

Router::get('insert','StudyInsertController@insertForm');

Router::post('create','StudyInsertController@insert');

Router::get('view_list','StudySelectController@select');

Router::get('view_list_data','StudyUpdateController@index');

Router::get('edit/{id}','StudyUpdateController@selectId');

Router::post('edit/{id}','StudyUpdateController@updateId');

Router::get('delete/{id}','StudyDeleteController@deleteId');























































        
         