<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\SessionController;

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

//put pour ajouter data a la session
Route::get('/test1', function () {
    session()->put('nom' , 'Ahmed');
});

// idSession= DnCR9IfWtHMqFMuaYAmgAs74uCcqro3rfCxvtjKh
// Ahmed
Route::get('/test2', function () {
    if(session()->exists('nom')){
        echo 'idSession= '. session()->getId() . '<br/>';
        echo session()->get('nom');
    }else{
        echo "nom n'existe pas dans la session . execute test1";
    }
    //$value = $request->session()->pull('key', 'default');
});

//////////////////////////////////////////////////////////////////////
//on recupere les donnees depuis url et on fait l'affichage dans test4
Route::get('/test3/{x}', function ($val) {
    session()->push('noms' , $val);      
});
//["said","hamid","abdelhay"]
Route::get('/test4', function () {
    // dd(session()->all()); 
    echo json_encode(session()->get('noms')) ;  
});
//////////////////////////////////////////////////////////////////////
Route::get('/test5', function () {
    session()->regenerate();
    session()->increment('count');
    echo session()->get('count') . ' fois';
});

Route::get('/test6', function () {
    $result = DB::table('abde')->get();
    return view ('page1' , ['result' => $result]);
});

Route::get('/test7/{x}', function ($id) {
    $result = DB::table('abde')->find($id);
    if ($result){
        return json_encode($result);
    }else{
        abort(404);
    }
});

Route::get('session/get',[SessionController::class,'getSessionData'])->name('get.data');
Route::get('session/add',[SessionController::class,'storeSessionData'])->name('add.data');
Route::get('session/remove',[SessionController::class,'deleteSessionData'])->name('remove.data');

