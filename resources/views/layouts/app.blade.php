<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Website Hewan Peliharaan')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{-- Tailwind via CDN (cukup untuk latihan) --}}
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-slate-100 min-h-screen">

    <nav class="bg-white shadow mb-6">
        <div class="max-w-5xl mx-auto px-4 py-4 flex flex-col md:flex-row md:items-center md:justify-between gap-3">
            {{-- Logo / Judul kiri --}}
            <a href="{{ route('hewan.index') }}" class="flex items-center gap-3">
                <span class="text-2xl">🐾</span>
                <span class="text-xl font-bold text-sky-600">
                    Hewan Peliharaan
                </span>
            </a>

            {{-- NAV PILL BUTTONS --}}
            <div class="flex items-center gap-3">

                {{-- Tab Hewan (active kalau di route hewan.*) --}}
                <a href="{{ route('hewan.index') }}"
                   class="px-5 py-1.5 rounded-full text-sm font-medium transition
                   {{ request()->routeIs('hewan.*')
                        ? 'bg-sky-500 text-white shadow-md hover:bg-sky-600'
                        : 'border border-sky-300 text-sky-700 hover:bg-sky-50' }}">
                    Hewan
                </a>

                {{-- Tab Jenis Hewan (aktif kalau route jenis.*) --}}
                <a href="{{ route('jenis.index') ?? '#' }}"
                   class="px-5 py-1.5 rounded-full text-sm font-medium transition
                   {{ request()->routeIs('jenis.*')
                        ? 'bg-sky-500 text-white shadow-md hover:bg-sky-600'
                        : 'border border-sky-300 text-sky-700 hover:bg-sky-50' }}">
                    Jenis Hewan
                </a>

                {{-- Tab Pemilik (aktif kalau route pemilik.*) --}}
                <a href="{{ route('pemilik.index') ?? '#' }}"
                   class="px-5 py-1.5 rounded-full text-sm font-medium transition
                   {{ request()->routeIs('pemilik.*')
                        ? 'bg-sky-500 text-white shadow-md hover:bg-sky-600'
                        : 'border border-sky-300 text-sky-700 hover:bg-sky-50' }}">
                    Pemilik
                </a>

                {{-- Tombol Tambah Hewan khusus (selalu ada) --}}
                <a href="{{ route('hewan.create') }}"
                   class="hidden sm:inline-block px-4 py-1.5 text-sm rounded-full bg-emerald-500 text-white hover:bg-emerald-600 transition">
                    + Tambah Hewan
                </a>
            </div>
        </div>
    </nav>

    <main class="max-w-5xl mx-auto px-4">
        @if (session('success'))
            <div class="mb-4 p-3 bg-emerald-100 border border-emerald-300 text-emerald-800 text-sm rounded">
                {{ session('success') }}
            </div>
        @endif

        @yield('content')
    </main>

    <footer class="mt-10 py-4 text-center text-xs text-slate-500">
        &copy; {{ date('Y') }} Website Hewan Peliharaan
    </footer>
</body>
</html>
