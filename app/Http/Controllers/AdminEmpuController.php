<?php

namespace App\Http\Controllers;

use App\Models\Empu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminEmpuController extends Controller
{
    public function index()
    {
        $empus = Empu::latest()->paginate(10);
        return view('admin.empu.index', compact('empus'));
    }

    public function create()
    {
        return view('admin.empu.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'title' => 'nullable|string|max:255',
            'description' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $imagePath = $request->file('image')->store('empus', 'public');

        Empu::create([
            'name' => $request->name,
            'title' => $request->title,
            'description' => $request->description,
            'image' => $imagePath,
            'is_certified' => $request->has('is_certified'),
        ]);

        return redirect()->route('dashboard.empu.index')->with('success', 'Profil Empu berhasil ditambahkan!');
    }

    public function edit(Empu $empu)
    {
        return view('admin.empu.edit', compact('empu'));
    }

    public function update(Request $request, Empu $empu)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'title' => 'nullable|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $data = [
            'name' => $request->name,
            'title' => $request->title,
            'description' => $request->description,
            'is_certified' => $request->has('is_certified'),
        ];

        if ($request->hasFile('image')) {
            if ($empu->image && Storage::disk('public')->exists($empu->image)) {
                Storage::disk('public')->delete($empu->image);
            }
            $data['image'] = $request->file('image')->store('empus', 'public');
        }

        $empu->update($data);

        return redirect()->route('dashboard.empu.index')->with('success', 'Profil Empu berhasil diperbarui!');
    }

    public function destroy(Empu $empu)
    {
        if ($empu->image && Storage::disk('public')->exists($empu->image)) {
            Storage::disk('public')->delete($empu->image);
        }

        $empu->delete();

        return redirect()->route('dashboard.empu.index')->with('success', 'Profil Empu berhasil dihapus!');
    }
}
