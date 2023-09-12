<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('test1', function () {
    return view('page1');
});
Route::post('test1', function () {
    return (request()->all());
});
Route::get('test2', function (Request $request) {
    return $request->path();
});
//nom : groupe   value:202      2: max age 2min 
Route::get('test3', function () {
    return response('Hello World')->cookie('groupe' , '202' , 2);
});

//pour nous recuperer la valeur de la cookie groupe 202
Route::get('test4', function () {
    return request()->cookie('groupe');
});
//insertion d'un cookie

// Route::get('/cookie/set/{cookie}', function ($cookie) {
//     $response = new Response();
//     $cookieObject = cookie("age" , $cookie , 5);
//     return $response->withCookie($cookieObject);    
// });

//withCookie : qui permet de générer et d'envoyer un cookie dans la réponse HTTP 
Route::get('/cookie/set/{cookie}', function ($cookie) {
    $response = new Response();
    $cookieObject = cookie()->forever('age' , $cookie);
    return $response->withCookie($cookieObject);    
});

Route::get('/cookie/get', function (Request $request) {
    dd($request->cookie('age'));    
});
//resaux  headers  entete
Route::get('/headers', function (Request $request) {
    $response = new Response(['data' => 'ok']);
    dd($request->header('abc' , 'XYZ'));
    return $response->withHeaders([
        'Content-Type' => 'Application/json', 
        'X-ABDELHAY' => 'Yes'
    ]);
});

//fullUrl si tu tu veux les query parametre
Route::get('/request', function (Request $request) {
    // dd( $request->url() , $request->fullUrl());
    // dd( $request->path() );
    // dd( $request->is('request') );
    dd( $request->host() );
    // dd( $request->isMethod('GET') );
    //dd( $request->ip() );
});


//Header + Request 
//Content-type : text/plain image/png application/json 
//Cache
//..
//X-ABDELHAY = 15
//Server -> Navigateur 
