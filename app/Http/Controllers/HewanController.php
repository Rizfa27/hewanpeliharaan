<?php

namespace App\Http\Controllers;

use App\Models\Hewan;
use App\Models\JenisHewan;
use App\Models\Pemilik;
use Illuminate\Http\Request;

class HewanController extends Controller
{
    // LIST hewan
    public function index()
    {
        $hewan = Hewan::with(['jenis', 'pemilik'])->get();

        return view('hewan.index', compact('hewan'));
    }

    // DETAIL hewan
    public function show(Hewan $hewan)
    {
        $hewan->load(['jenis', 'pemilik']);

        return view('hewan.show', compact('hewan'));
    }

    // FORM tambah hewan
    public function create()
    {
        $jenis = JenisHewan::all();
        $pemilik = Pemilik::all();

        return view('hewan.create', compact('jenis', 'pemilik'));
    }

    // SIMPAN hewan baru
    public function store(Request $request)
    {
        $data = $request->validate([
            'nama_hewan' => 'required|string|max:255',
            'umur'       => 'nullable|integer',
            'jenis_id'   => 'required|exists:jenis_hewans,id',
            'pemilik_id' => 'required|exists:pemiliks,id',
        ]);

        Hewan::create($data);

        return redirect()->route('hewan.index')->with('success', 'Hewan berhasil ditambahkan!');
    }
}
