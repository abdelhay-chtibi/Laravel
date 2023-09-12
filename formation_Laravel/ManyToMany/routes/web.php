<?php

use Illuminate\Support\Facades\Route;
//use App\Models\{User,Role};
use App\Models\User;
use App\Models\Role;

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


Route::get('/save_user', function () {
    $usr1=new User([
        'name'=>'user1',
        'email'=>'user1@gmail.com',
        'password'=>"123"
    ]);
    $usr1->save();
});
Route::get('/save_role', function () {
    $role1=new Role([
        'nom'=>'role1',
        'desc'=>'description role'
    ]);
    $role1->save();
});

Route::get('/save_user_role', function () {
    $role1=Role::find(1);
    $user1=User::find(1);
    $user1->roles()->attach($role1->id);
});

Route::get('/remove_users_roles', function () {
    $role1=Role::find(1);
    $user1=User::find(1);
    $user1->roles()->detach($role1->id);
});

Route::get('/save_user_roles', function () {
    $role1=Role::find(1);
    $role2=new Role([
        'nom'=>'role00',
        'desc'=>'description role00'
    ]);
    $role2->save();
    $user1=User::find(1);
    $user1->roles()->attach([$role1->id, $role2->id]);
});