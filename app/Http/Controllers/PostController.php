<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
class PostController extends Controller
{
    public function addPost(Request $request) {
        $post = Post::create([
            'title' => $request->input('title'),
            'content' => $request->input('content'),
        ]);
        return response($post, 201);
    }

    public function addGet(Request $request) {
        return Post::all();
    }
}
