<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800">
            Blog Artikel
        </h2>
    </x-slot>

    <div class="py-10 bg-gray-100 min-h-screen">
        <div class="max-w-7xl mx-auto px-6">

            {{-- HERO --}}
            <div class="bg-blue-600 text-white rounded-2xl p-8 shadow mb-10">
                <h1 class="text-3xl font-bold">📚 Blog Artikel</h1>
                <p class="mt-2 text-lg">
                    Kumpulan artikel yang dipublikasikan oleh admin
                </p>
            </div>

            {{-- LIST --}}
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                @forelse ($articles as $article)
                    <div class="bg-white rounded-2xl p-6 shadow hover:shadow-lg transition">
                        <h3 class="text-xl font-bold text-gray-800">
                            {{ $article->judul }}
                        </h3>

                        <p class="text-gray-600 mt-2">
                            {{ \Illuminate\Support\Str::limit(strip_tags($article->isi), 120) }}
                        </p>

                        <div class="mt-4 text-sm text-gray-500">
                            ✍ {{ $article->penulis }} <br>
                            📅 {{ \Carbon\Carbon::parse($article->tanggal_publikasi)->format('d M Y') }}
                        </div>

                        {{-- TOMBOL BACA --}}
                        <a href="{{ route('blog.show', $article->id) }}"
                           class="inline-block mt-4 bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg">
                            📖 Baca Selengkapnya
                        </a>
                    </div>
                @empty
                    <div class="col-span-2 bg-white p-6 rounded-xl shadow text-center text-gray-500">
                        Belum ada artikel
                    </div>
                @endforelse
            </div>

            {{-- KEMBALI --}}
            <div class="mt-10">
                <a href="{{ route('dashboard') }}"
                   class="bg-gray-700 hover:bg-gray-800 text-white px-5 py-2 rounded-lg">
                    ⬅ Kembali ke Dashboard
                </a>
            </div>

        </div>
    </div>
</x-app-layout>
