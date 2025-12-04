@extends('layouts.app')

@section('title', 'Tambah Hewan')

@section('content')
    <h1 class="text-2xl font-bold mb-4">Tambah Hewan Baru</h1>

    <form action="{{ route('hewan.store') }}" method="POST" class="bg-white rounded-lg shadow p-5 max-w-lg">
        @csrf

        <div class="mb-3">
            <label class="block text-sm font-semibold mb-1">Nama Hewan</label>
            <input type="text" name="nama_hewan"
                   value="{{ old('nama_hewan') }}"
                   class="w-full border rounded px-3 py-2 text-sm @error('nama_hewan') border-red-500 @enderror">
            @error('nama_hewan')
                <p class="text-xs text-red-600 mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-3">
            <label class="block text-sm font-semibold mb-1">Umur (tahun)</label>
            <input type="number" name="umur"
                   value="{{ old('umur') }}"
                   class="w-full border rounded px-3 py-2 text-sm @error('umur') border-red-500 @enderror">
            @error('umur')
                <p class="text-xs text-red-600 mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-3">
            <label class="block text-sm font-semibold mb-1">Jenis Hewan</label>
            <select name="jenis_id"
                    class="w-full border rounded px-3 py-2 text-sm @error('jenis_id') border-red-500 @enderror">
                <option value="">-- Pilih Jenis --</option>
                @foreach($jenis as $j)
                    <option value="{{ $j->id }}" @selected(old('jenis_id') == $j->id)>
                        {{ $j->nama_jenis }}
                    </option>
                @endforeach
            </select>
            @error('jenis_id')
                <p class="text-xs text-red-600 mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-4">
            <label class="block text-sm font-semibold mb-1">Pemilik</label>
            <select name="pemilik_id"
                    class="w-full border rounded px-3 py-2 text-sm @error('pemilik_id') border-red-500 @enderror">
                <option value="">-- Pilih Pemilik --</option>
                @foreach($pemilik as $p)
                    <option value="{{ $p->id }}" @selected(old('pemilik_id') == $p->id)>
                        {{ $p->nama_pemilik }}
                    </option>
                @endforeach
            </select>
            @error('pemilik_id')
                <p class="text-xs text-red-600 mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="flex gap-2">
            <button type="submit"
                    class="px-4 py-2 bg-sky-600 text-white text-sm rounded hover:bg-sky-700">
                Simpan
            </button>
            <a href="{{ route('hewan.index') }}"
               class="px-4 py-2 bg-slate-100 text-sm text-slate-700 rounded hover:bg-slate-200">
                Batal
            </a>
        </div>
    </form>
@endsection
