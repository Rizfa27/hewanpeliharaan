@extends('layouts.app')

@section('title', 'Tambah Pemilik')

@section('content')
    <h1 class="text-2xl font-bold mb-6 text-sky-700">Tambah Pemilik</h1>

    <form action="{{ route('pemilik.store') }}" method="POST"
          class="bg-white rounded-lg shadow p-5 max-w-md">
        @csrf

        {{-- Nama Pemilik --}}
        <div class="mb-3">
            <label class="block mb-1 text-sm font-semibold">Nama Pemilik</label>
            <input type="text" name="nama_pemilik"
                   value="{{ old('nama_pemilik') }}"
                   class="w-full border rounded px-3 py-2 text-sm @error('nama_pemilik') border-red-500 @enderror">
            @error('nama_pemilik')
                <p class="text-xs text-red-600 mt-1">{{ $message }}</p>
            @enderror
        </div>

        {{-- Alamat --}}
        <div class="mb-4">
            <label class="block mb-1 text-sm font-semibold">Alamat</label>
            <textarea name="alamat"
                      class="w-full border rounded px-3 py-2 text-sm @error('alamat') border-red-500 @enderror"
                      rows="3">{{ old('alamat') }}</textarea>
            @error('alamat')
                <p class="text-xs text-red-600 mt-1">{{ $message }}</p>
            @enderror
        </div>

        {{-- FOTO --}}
        <div class="mb-4">
            <label class="block mb-1 font-semibold">Foto Pemilik</label>
            <input type="file" name="foto"
                    class="w-full border rounded px-3 py-2 @error('foto') border-red-500 @enderror">
            @error('foto')
                <p class="text-red-500 text-sm">{{ $message }}</p>
            @enderror
        </div>

        <div class="flex gap-2">
            <button type="submit"
                    class="px-4 py-2 bg-sky-500 text-white text-sm rounded hover:bg-sky-600">
                Simpan
            </button>
            <a href="{{ route('pemilik.index') }}"
               class="px-4 py-2 bg-slate-200 text-sm text-slate-700 rounded hover:bg-slate-300">
                Batal
            </a>
        </div>
    </form>
@endsection
