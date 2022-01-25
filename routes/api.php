<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Http\Controllers\PostController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/posts', function(){
    return Post::all();
});

Route::post('/addPost', [App\Http\Controllers\PostController::class, 'addPost']);
Route::get('/addGet', [App\Http\Controllers\PostController::class, 'addGet']);

// Route::post('/posts', function(){
//     return Post::create([
//         'title' => request('title'),
//         'content' => request('content'),
//     ]);
// });

// Route::put('/posts/{post}', function(Post $post){

//     $success = $post->update([
//         'title' => request('title'),
//         'content' => request('content'),
//     ]);

//     return [
//         'success' => $success,
//     ];
// });