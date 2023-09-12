<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome',[
        "n"=>["Abdelhay", "Ahmed" , "Anas"]
    ]);
});

Route::get('/test1', function () {
    return view('test.a');
});

Route::get('/test2', function () {
    return view('test.a',[
        "test"=>'<h1>Code HTML</h1>'  ,
        'num' => 102

    ]);
});

Route::get('/test3', function () {
    return view('test.b',[
        'num' => 102

    ]);
});
Route::get('/test4', function () {
    return view('test.c',[
        'num' => 102

    ]);
});
Route::get('/test5', function () {
    return view('test.d',[
        'couleurs' => ['rouge' , 'vert', 'orange']
    ]);
});
Route::get('/test6', function () {
    return view('test.e',[
        'couleur' => 'rouge'
    ]);
});

Route::get('/test7', function () {
    return view('test.f',[
        'couleurs' => ['rouge' , 'vert', 'orange']

    ]);
});