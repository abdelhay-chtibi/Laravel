<?php

use Illuminate\Support\Facades\Route;
use \App\Models\Categorie;
use \App\Models\Produit;

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

Route::get('/test1', function () {
    DB::transaction(function () {
        $cat1=new Categorie([
            'nom'=>'categ1'
        ]);

        $prd1=new Produit([
            'nom'=>'prod1',
            'prix'=>22.5,
            'quantite'=>10
        ]);

        $cat1->save();
        $cat1->produits()->save($prd1);
    });
});

Route::get('/test2', function () {
    DB::transaction(function () {
        $cat1=Categorie::find(1);
        $cat1->produits()->saveMany([
            new Produit([
                'nom'=>'prod2',
                'prix'=>22.5,
                'quantite'=>10
            ]),
            new Produit([
                'nom'=>'prod3',
                'prix'=>22.5,
                'quantite'=>10
            ])
        ]);
    });
});

Route::get('test3/{id_categ}', function ($id_categ) {
    return response()->json(Categorie::findOrFail($id_categ)->produits);
});

Route::get('/test4', function () {
   $categs=Categorie::all();
   return view('prodsByCateg',['categories'=>$categs]);
});

Route::get('/test5/{id}', function ($val=0) {
    $categs=Categorie::all();
    return view('prodsByCateg1',['categories'=>$categs]);
});