@extends('layouts.app')

@section('title', 'Daftar Pemilik')

@section('content')
    <div class="flex justify-between items-center mb-4">
        <h1 class="text-2xl font-bold text-sky-700">Daftar Pemilik</h1>

        <a href="{{ route('pemilik.create') }}"
           class="px-4 py-2 bg-sky-500 text-white rounded-full hover:bg-sky-600 transition">
            + Tambah Pemilik
        </a>
    </div>

    @if($pemiliks->isEmpty())
        <p class="text-slate-600">Belum ada data pemilik.</p>
    @else
        <div class="bg-white rounded-lg shadow p-4">
            <ul class="divide-y">
                @foreach($pemiliks as $p)
                    <li class="py-3 flex justify-between items-center">
                        <<div class="flex gap-3 items-center">

                            @if($p->foto)
                                <img src="{{ asset('storage/pemilik/' . $p->foto) }}"
                                    class="w-10 h-10 rounded-full object-cover border">
                            @else
                                <div class="w-10 h-10 rounded-full bg-slate-300 flex items-center justify-center text-sm">
                                    ❓
                                </div>
                            @endif

                            <div>
                                <p class="font-medium text-slate-800">{{ $p->nama_pemilik }}</p>
                                <p class="text-xs text-slate-500">{{ $p->alamat ?: 'Alamat belum diisi' }}</p>
                            </div>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
    @endif
@endsection
