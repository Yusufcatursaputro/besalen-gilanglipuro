<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class AdminDashboardController extends Controller
{
    public function index()
    {
        $totalPosts = Post::count();
        return view('admin.dashboard', compact('totalPosts'));
    }
}
