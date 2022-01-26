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
Route::put('/updatePost/{post}', [App\Http\Controllers\PostController::class, 'updatePost']);
Route::delete('/deletePost/{post}', [App\Http\Controllers\PostController::class, 'deletePost']);
Route::delete('/deleteAllPost', [App\Http\Controllers\PostController::class, 'deleteAllPost']);