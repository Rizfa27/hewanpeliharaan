@extends('layouts.app')

@section('title', 'Daftar Hewan')

@section('content')
    <h1 class="text-2xl font-bold mb-4">Daftar Hewan Peliharaan</h1>

    @if($hewan->isEmpty())
        <p class="text-slate-600">Belum ada hewan terdaftar. Coba tambahkan satu dari tombol di atas.</p>
    @else
        <div class="grid gap-4 md:grid-cols-2">
            @foreach($hewan as $item)
                <a href="{{ route('hewan.show', $item) }}"
                   class="block bg-white rounded-lg shadow p-4 hover:shadow-md transition">
                    <h2 class="text-lg font-semibold">{{ $item->nama_hewan }}</h2>
                    <p class="text-sm text-slate-600">
                        Jenis: <span class="font-medium">{{ $item->jenis->nama_jenis ?? '-' }}</span>
                    </p>
                    <p class="text-sm text-slate-600">
                        Pemilik: <span class="font-medium">{{ $item->pemilik->nama_pemilik ?? '-' }}</span>
                    </p>
                    <p class="text-sm text-slate-500 mt-1">
                        Umur: {{ $item->umur ? $item->umur.' tahun' : 'Tidak diketahui' }}
                    </p>
                </a>
            @endforeach
        </div>
    @endif
@endsection
