<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\User;


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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('/test1', function(){
    return 'for all users';
 });
 
Route::get('/test2', function(){
     return "for authenticated users";
})->middleware('auth');
 
Route::view('test3', 'page3');

Route::get('create_role1', function(){
    Role::create(['name' => 'role1']);
});

Route::get('create_role2', function(){
    Role::create(['name' => 'role2']);
});

Route::get('create_permission1', function(){
    Permission::create(['name' => 'permission']);
});
Route::get('create_permission2', function(){
    Permission::create(['name' => 'permission2']);
});

// il est courant qu'un rôle puisse avoir plusieurs permissions associées.
Route::get('assign_permission1_to_role1', function(){
    $role1=Role::findByName('role1');
    $permission1=Permission::findByName('permission');
    $permission1->assignRole($role1);
});

Route::get('assign_permission2_to_role2', function(){
    $role1=Role::findByName('role2');
    $permission1=Permission::findByName('permission2');

    $permission1->assignRole($role1);
});
Route::get('assign_user1_to_role1', function(){
    $role1=Role::findByName('role1');
    $user1= User::find(1);

    $user1->assignRole('role1');
    
});
Route::get('assign_user2_to_role2', function(){
    $role1=Role::findByName('role2');
    $user1= User::find(2);

    $user1->assignRole('role2');
    
});
//'can' est un middleware fourni par Laravel pour vérifier si l'utilisateur a une permission spécifique, 
//et 'permission' est le nom de la permission que vous souhaitez vérifier.
Route::group(['middleware'=>['can:permission']], function(){
    Route::get('test_permission1', function () {
        return 'I have permission';
    });
});
Route::group(['middleware'=>['can:permission2']], function(){
    Route::get('test_permission2', function () {
        return 'I have permission2';
    });
});
