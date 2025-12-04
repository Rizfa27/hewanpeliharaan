@extends('layouts.app')

@section('title', 'Daftar Jenis Hewan')

@section('content')
    <div class="flex justify-between items-center mb-4">
        <h1 class="text-2xl font-bold text-sky-700">Jenis Hewan</h1>

        <a href="{{ route('jenis.create') }}"
            class="px-4 py-2 bg-sky-500 text-white rounded-full hover:bg-sky-600 transition">
            + Tambah Jenis
        </a>
    </div>

    @if($jenis->isEmpty())
        <p class="text-slate-600">Belum ada data jenis hewan.</p>
    @else
        <div class="bg-white rounded-lg shadow p-4">
            <ul class="divide-y">
                @foreach($jenis as $item)
                    <li class="py-3 flex justify-between">
                        <span class="text-slate-700">{{ $item->nama_jenis }}</span>
                        <a href="{{ route('jenis.show', $item) }}" class="text-sky-500 hover:text-sky-700">
                            Detail →
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
    @endif
@endsection
