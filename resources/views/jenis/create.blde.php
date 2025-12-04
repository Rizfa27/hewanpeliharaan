@extends('layouts.app')

@section('title', 'Tambah Jenis Hewan')

@section('content')
    <h1 class="text-2xl font-bold mb-6 text-sky-700">Tambah Jenis Hewan</h1>

    <form action="{{ route('jenis.store') }}" method="POST"
          class="bg-white rounded-lg shadow p-5 max-w-md">
        @csrf

        <label class="block mb-2 font-medium">Nama Jenis Hewan</label>
        <input type="text" name="nama_jenis"
               value="{{ old('nama_jenis') }}"
               class="w-full border rounded px-3 py-2 @error('nama_jenis') border-red-500 @enderror">

        @error('nama_jenis')
            <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
        @enderror

        <div class="mt-4 flex gap-3">
            <button class="px-4 py-2 bg-sky-500 text-white rounded hover:bg-sky-600">
                Simpan
            </button>
            <a href="{{ route('jenis.index') }}"
               class="px-4 py-2 bg-slate-200 text-slate-700 rounded hover:bg-slate-300">
                Batal
            </a>
        </div>
    </form>
@endsection
