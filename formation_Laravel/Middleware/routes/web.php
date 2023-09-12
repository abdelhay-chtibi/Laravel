<?php

use Illuminate\Support\Facades\Route;

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

// Un middleware est un logiciel qui agit comme une couche intermédiaire entre les différentes applications

Route::get('/', function () {
    return view('welcome');
});

//http://127.0.0.1:8000/test1?age=23
Route::get('/test1', function () {
    return view('acceuil');
})->middleware('age');

//127.0.0.1:8000/test2?nom=admin
Route::get('/test2', function () {
    return view('contact');
})->middleware('admin');

//Groupe de middleware la configuration de groupe de middleware dans le fichier kernal 
//http://127.0.0.1:8000/test3?age=22&nom=admin
Route::get('/test3', function () {
    return view('test');
})->middleware('test');