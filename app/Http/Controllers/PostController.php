<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
class PostController extends Controller
{
    public function getPost(Request $request) {
        return Post::all();
    }

    public function addPost(Request $request) {
        $post = Post::create([
            'title' => $request->input('title'),
            'content' => $request->input('content'),
        ]);
        return response($post, 201);
    }

    public function updatePost(Request $request, Post $post) {
        $request->validate([
            'title'=> 'required',
            'content' => 'required',
        ]);

        $success = $post->update([
            'title' => request('title'),
            'content' => request('content'),
        ]);

        return [
            'success' => $success,
        ];
    }

    public function deletePost(Request $request, Post $post) {

        $success = $post->delete();

        return [
            'success' => $success,
        ];
    }

    public function deleteAllPost(Request $request, Post $post) {

        $success = $post->truncate();
        
        return [
            'success' => $success,
        ];
    }
}
