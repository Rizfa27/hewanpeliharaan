@extends('layouts.app')

@section('title', 'Detail Hewan')

@section('content')
    <div class="bg-white rounded-lg shadow p-5">
        <h1 class="text-2xl font-bold mb-2">{{ $hewan->nama_hewan }}</h1>

        <div class="space-y-1 text-sm text-slate-700">
            <p>
                <span class="font-semibold">Jenis:</span>
                {{ $hewan->jenis->nama_jenis ?? '-' }}
            </p>
            <p>
                <span class="font-semibold">Pemilik:</span>
                {{ $hewan->pemilik->nama_pemilik ?? '-' }}
            </p>
            <p>
                <span class="font-semibold">Alamat Pemilik:</span>
                {{ $hewan->pemilik->alamat ?? '-' }}
            </p>
            <p>
                <span class="font-semibold">Umur:</span>
                {{ $hewan->umur ? $hewan->umur.' tahun' : 'Tidak diketahui' }}
            </p>
        </div>

        <div class="mt-4">
            <a href="{{ route('hewan.index') }}"
               class="inline-block px-4 py-2 text-sm bg-slate-100 text-slate-700 rounded hover:bg-slate-200">
                ← Kembali ke daftar
            </a>
        </div>
    </div>
@endsection
