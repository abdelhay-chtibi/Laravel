<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Requests\PersRequest;

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
Route::get('/template', function () {
    return view('template');
});
Route::get('/page1', function () {
    return view('page1');
});
Route::get('/test2', function (Request $request) {
    return json_encode($request) ;
});

Route::get('/test3', function () {
    return view('form');
});

// Route::post('/test3', function (Request $request) {
//     return 'nom= '.$_POST['nom'];
//     //return $request->input('nom');
//     //return $request->nom;    
// });

//app/Http/Requests/PersRequest
Route::post('/test3', function (PersRequest $req) {
    //return 'nom= '.$_POST['nom'];
    //return $request->input('nom');
    return view('rep');
});
//contient 1 ou plusieurs chiffre entre 0 et 9 
Route::get('/test4/{x?}', function ($val=0) {
    return 'Hello1 '. $val;
})->where('x', '[0-9]+');

//la condition dans RouteServiceProvider   Route::pattern('a', '[0-9]+');
Route::get('/test5/{a?}', function ($val=0) {
    return 'Hello2 '.$val;
});

//URL test4 affiche la vue welcome
Route::view('/test6', 'welcome')->name('route1');

// Route::view('/test44', 'welcome')->name('route1');

//la valeur de la variable x de la p1.blade.php est Abdelhay
Route::view('/test7', 'p1', ['x'=>'Abdelhay']);


//test8 affiche la vue p2
Route::view('/test8', 'p2');

//////////////////////////////////////////////////////////////////////////////////////////////

Route::get('/test9', function(Request $request){
    //dump and die
    return dd($request);
    //return dd($request->headers);
    
});
Route::get('/test10', function(){
    return redirect()->route('route1');
});

Route::redirect('/test11', '/test10');

Route::prefix('devowfs')->group(function(){
    Route::view('/test12', 'welcome');
    Route::view('/test13', 'welcome');
});



Route::prefix('hello')->get('abc', function(){
    return 'hello abc';
});

Route::prefix('hello')->get('abd', function(){
    return 'hello abd';
});

Route::prefix('hello')->group(function(){
    Route::get('abc', function(){
        return 'hello abc';
    });
    Route::get('abcd', function(){
        return 'hello abcd';
    });
});

//3=nb executions, 1=1min
Route::middleware('throttle:3,1')->group(function () {
    Route::get('/test14', function () {
        return 'hello test14';
    });
});

Route::get('/test17/{x}', function(Request $request){
    return $request->x;
});
Route::fallback(function () {
        return 'not found';
});