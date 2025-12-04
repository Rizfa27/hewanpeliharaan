@extends('layouts.app')

@section('title', 'Daftar Hewan Peliharaan')

@section('content')
    <h1 class="text-2xl font-bold mb-4">Daftar Hewan Peliharaan</h1>

    @if($hewan->isEmpty())
        <p class="text-slate-600">Belum ada hewan terdaftar.</p>
    @else
        <div class="space-y-4">
            @foreach($hewan as $item)
                <a href="{{ route('hewan.show', $item) }}"
                   class="block bg-white rounded-lg shadow p-4 hover:shadow-md transition">

                    <div class="flex gap-4 items-center">
                        {{-- FOTO HEWAN --}}
                        @if($item->foto)
                            <img src="{{ asset('storage/' . $item->foto) }}"
                                 alt="Foto {{ $item->nama_hewan }}"
                                 class="w-20 h-20 rounded-xl object-cover border">
                        @else
                            <div class="w-20 h-20 rounded-xl bg-slate-200 flex items-center justify-center text-slate-500">
                                🐾
                            </div>
                        @endif

                        {{-- TEKS INFO --}}
                        <div>
                            <h2 class="text-lg font-semibold">{{ $item->nama_hewan }}</h2>
                            <p class="text-sm text-slate-600">
                                Jenis:
                                <span class="font-medium">
                                    {{ $item->jenis->nama_jenis ?? '-' }}
                                </span>
                            </p>
                            <p class="text-sm text-slate-600">
                                Pemilik:
                                <span class="font-medium">
                                    {{ $item->pemilik->nama_pemilik ?? '-' }}
                                </span>
                            </p>
                            <p class="text-sm text-slate-500 mt-1">
                                Umur: {{ $item->umur ? $item->umur . ' tahun' : 'Tidak diketahui' }}
                            </p>
                        </div>
                    </div>
                </a>
            @endforeach
        </div>
    @endif
@endsection
