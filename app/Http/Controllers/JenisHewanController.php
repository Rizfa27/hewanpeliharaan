<?php

namespace App\Http\Controllers;

use App\Models\JenisHewan;
use Illuminate\Http\Request;

class JenisHewanController extends Controller
{
    public function index()
    {
        $jenis = JenisHewan::all();
        return view('jenis.index', compact('jenis'));
    }

    public function create()
    {
        return view('jenis.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_jenis' => 'required|max:255'
        ]);

        JenisHewan::create([
            'nama_jenis' => $request->nama_jenis,
        ]);

        return redirect()->route('jenis.index')->with('success', 'Jenis hewan berhasil ditambahkan!');
    }

    public function show(JenisHewan $jenisHewan)
    {
        return view('jenis.show', compact('jenisHewan'));
    }
}
