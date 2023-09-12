<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Models\Video;
use App\Models\Comment;

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

Route::get('/add_post_comment', function () {
    $post1=Post::findOrfail(1);
    $comment1=new Comment([
        'desc'=>'desc post1'
    ]);
    $post1->comments()->save($comment1);
});
Route::get('/add_video_comment', function () {
    $video1=Video::findOrfail(1);
    $comment1=new Comment([
        'desc'=>'desc video1'
    ]);
    $video1->comments()->save($comment1);
});

Route::get('/add_video_comment2', function () {
    $video1=Video::findOrfail(1);
    $comment2=new Comment([
        'desc'=>'desc video2'
    ]);
    $video1->comments()->save($comment2);
});

Route::get('/video1_comments', function () {
    $video1=Video::findOrfail(1);
    return $video1->comments;
});

//morphdByMany dans la table film (acteur category ) 
