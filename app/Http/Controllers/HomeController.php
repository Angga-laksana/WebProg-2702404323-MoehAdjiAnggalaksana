<?php

namespace App\Http\Controllers;

use App\Models\Post;

class HomeController extends Controller {
    public function index() {
        $latestPosts = Post::with(['category','writer'])->orderByDesc('published_at')->take(3)->get();
        return view('home', compact('latestPosts'));
    }
}
