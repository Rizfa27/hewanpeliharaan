@extends('layouts.app')

@section('title', 'Detail Pemilik')

@section('content')
    <div class="flex items-center gap-6">

    @if($pemilik->foto)
        <img src="{{ asset('storage/pemilik/' . $pemilik->foto) }}"
             class="w-32 h-32 rounded-full object-cover border">
    @else
        <div class="w-32 h-32 rounded-full bg-slate-300 flex items-center justify-center text-4xl">
            ❓
        </div>
    @endif

    <div>
        <h1 class="text-3xl font-bold text-sky-700">{{ $pemilik->nama_pemilik }}</h1>
        <p class="text-sm text-slate-600"><strong>Alamat:</strong> {{ $pemilik->alamat ?: '—' }}</p>
    </div>
</div>
@endsection
