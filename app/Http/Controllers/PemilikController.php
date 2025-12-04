<?php

namespace App\Http\Controllers;

use App\Models\Pemilik;
use Illuminate\Http\Request;

class PemilikController extends Controller
{
    public function index()
    {
        // ambil semua pemilik beserta jumlah hewan
        $pemiliks = Pemilik::withCount('hewan')->get();

        return view('pemilik.index', compact('pemiliks'));
    }

    public function create()
    {
        return view('pemilik.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'nama_pemilik' => 'required|string|max:255',
            'alamat'       => 'nullable|string',
            'foto'         => 'nullable|image|nimes:jpg,jpeg,png,webp|max:2048'
        ]);

        // Upload file kalau ada
        if ($request->hasFile('foto')) {
            $filename = time() . '_' . $request->file('foto')->getClientOriginalName();
            $request->file('foto')->storeAs('pemilik', $filename, 'public');
            $data['foto'] = $filename;
            
    }

        Pemilik::create($data);

        return redirect()->route('pemilik.index')
            ->with('success', 'Data pemilik berhasil ditambahkan!');
    }

    public function show(Pemilik $pemilik)
    {
        // load hewan yang dimiliki
        $pemilik->load('hewan');

        return view('pemilik.show', compact('pemilik'));
    }
}
