@extends('layouts.app')

@section('title', 'Detail Jenis')

@section('content')
    <div class="bg-white rounded-lg shadow p-6">
        <h1 class="text-3xl font-bold text-sky-600 mb-2">{{ $jenisHewan->nama_jenis }}</h1>

        <p class="text-slate-600 text-sm mb-4">
            ID: <span class="font-medium">{{ $jenisHewan->id }}</span>
        </p>

        <a href="{{ route('jenis.index') }}"
           class="inline-block px-4 py-2 bg-slate-200 text-slate-700 rounded hover:bg-slate-300">
            ← Kembali
        </a>
    </div>
@endsection
