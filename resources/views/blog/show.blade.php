<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800">
            Detail Artikel
        </h2>
    </x-slot>

    <div class="py-10 bg-gray-100 min-h-screen">
        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">

            {{-- JUDUL ARTIKEL (TIDAK PUTIH) --}}
            <div class="bg-white rounded-2xl shadow p-8 mb-8 border-l-8 border-blue-600">
                <h1 class="text-3xl font-bold text-gray-900">
                    {{ $article->judul }}
                </h1>

                <div class="mt-3 flex gap-6 text-sm text-gray-600">
                    <span>✍ {{ $article->penulis }}</span>
                    <span>📅 {{ \Carbon\Carbon::parse($article->tanggal_publikasi)->format('d M Y') }}</span>
                </div>
            </div>

            {{-- ISI ARTIKEL --}}
            <div class="bg-white rounded-2xl shadow p-8 text-gray-800 text-lg leading-relaxed space-y-6">
                {!! nl2br(e($article->isi)) !!}
            </div>

            {{-- TOMBOL --}}
            <div class="mt-8 flex gap-4">
                <a href="{{ route('blog.index') }}"
                   class="bg-gray-700 hover:bg-gray-900 text-white px-6 py-3 rounded-lg font-semibold">
                    ⬅ Kembali ke Blog
                </a>

                <a href="{{ route('dashboard') }}"
                   class="bg-blue-600 hover:bg-blue-800 text-white px-6 py-3 rounded-lg font-semibold">
                    🏠 Dashboard
                </a>
            </div>

        </div>
    </div>
</x-app-layout>
