<?php

namespace App\Http\Controllers;

use App\Models\Post;

class PostController extends Controller {
    public function show($slug) {
        $post = Post::with(['category','writer'])->where('slug', $slug)->firstOrFail();
        $post->increment('views');
        return view('post.show', compact('post'));
    }
}
