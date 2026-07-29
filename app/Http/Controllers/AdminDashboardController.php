<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class AdminDashboardController extends Controller
{
    public function index()
    {
        $totalPosts = Post::count();
        $totalGalleries = \App\Models\Gallery::count();
        $totalEmpus = \App\Models\Empu::count();
        return view('admin.dashboard', compact('totalPosts', 'totalGalleries', 'totalEmpus'));
    }
}
