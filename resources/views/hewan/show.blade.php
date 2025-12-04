@extends('layouts.app')

@section('title', 'Detail Hewan')

@section('content')
    <div class="bg-white rounded-lg shadow p-6 flex gap-6">

        {{-- FOTO --}}
        @if($hewan->foto)
            <img src="{{ asset('storage/' . $hewan->foto) }}"
                 alt="Foto {{ $hewan->nama_hewan }}"
                 class="w-40 h-40 rounded-2xl object-cover border">
        @else
            <div class="w-40 h-40 rounded-2xl bg-slate-200 flex items-center justify-center text-5xl">
                🐾
            </div>
        @endif

        {{-- INFO --}}
        <div>
            <h1 class="text-3xl font-bold mb-2">{{ $hewan->nama_hewan }}</h1>

            <p class="text-slate-700">
                <span class="font-semibold">Jenis:</span>
                {{ $hewan->jenis->nama_jenis ?? '-' }}
            </p>
            <p class="text-slate-700">
                <span class="font-semibold">Pemilik:</span>
                {{ $hewan->pemilik->nama_pemilik ?? '-' }}
            </p>
            <p class="text-slate-700">
                <span class="font-semibold">Umur:</span>
                {{ $hewan->umur ? $hewan->umur . ' tahun' : 'Tidak diketahui' }}
            </p>

            <div class="mt-4">
                <a href="{{ route('hewan.index') }}"
                   class="inline-block px-4 py-2 bg-slate-100 text-slate-700 rounded hover:bg-slate-200 text-sm">
                    ← Kembali
                </a>
            </div>
        </div>
    </div>
@endsection
