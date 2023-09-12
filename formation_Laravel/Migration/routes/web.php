<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonneController;
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
//pour afficher les element de de la table personnes  url http://127.0.0.1:8000/personnes la fonction index
Route::resource('personnes', PersonneController::class);
