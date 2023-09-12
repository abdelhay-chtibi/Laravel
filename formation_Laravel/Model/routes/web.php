<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProduitController;
use App\Models\Produit;

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

Route::get('/', function () {
    return view('welcome');
});

//l'insertion 
Route::get('/test1', function () {
    //model Produit
    Produit::create([
        'nom'=>'chtibi',
        'prix'=>10.8,
        'quantite'=>15
    ]);
});

Route::get('/test2', function () {
    $p=new Produit();
        $p->nom='bentaher';
        $p->prix=100;
        $p->quantite=300;
        $p->save();
});

Route::get('/test3', function () {
    $p=new Produit([
        'nom'=>'sbaai',
        'prix'=>108,
        'quantite'=>150
    ]);
    $p->save();
});

//modifier
Route::get('/test4', function () {
    $p=Produit::find(3);
    $p->nom='Sbaai';
    $p->save();
});

Route::get('/test5', function () {
    Produit::where('id',2)->update([
        'nom'=>'SBAAI'
    ]);
});

//Supprimer
Route::get('/test6', function () {
    $p=Produit::find(4);
    $p->delete();
});

Route::get('/test7', function () {
    $p=Produit::findOrFail(4);
    $p->delete();
});

Route::resource('produits', ProduitController::class);

Route::get('/test8', function(){
    return \App\Models\User::find(2)->phone->numero;
});

Route::get('/test9', function(){
    return \App\Models\Phone::find(2)->user->name;
});

Route::get('/test10', function(){
    $t= \App\Models\User::where('name' , 'N1')->get();
    return $t[0]->phone->numero;
});

// Route::get('/test11', function(){
//     return \App\Models\User::where('name' , 'N1')->get();
// });

// Route::get('/test11', function(){
//     $t= \App\Models\Phone::where('numero' , '1234567890')->get();
//     return $t[0]->user->name;
// });

Route::get('/test11', function(){
    $t= \App\Models\Phone::where('numero' , '1234567890')->first();
    return $t->user->name;
});

//lazy loading 
Route::get('/test12', function(){
     //return \App\Models\User::with('phone')->find(2);
     return response()->json(\App\Models\User::with('phone')->find(2),200)
        ->header('Content-Type','application/json');
});