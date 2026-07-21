<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $latestPosts = Post::latest()->take(3)->get();
        return view('home', compact('latestPosts'));
    }
}
