<?php

namespace App\Http\Controllers;

use App\Models\Empu;
use Illuminate\Http\Request;

class TentangController extends Controller
{
    public function index()
    {
        $empus = Empu::all();
        return view('tentang', compact('empus'));
    }
}
