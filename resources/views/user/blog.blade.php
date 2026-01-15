<x-app-layout>
    <x-slot name="header">
        <h2 class="text-2xl font-bold text-gray-900">
            Blog Artikel
        </h2>
    </x-slot>

    <div class="py-8">
        <div class="max-w-7xl mx-auto space-y-6">

            <a href="{{ route('dashboard') }}"
               class="inline-block px-4 py-2 bg-gray-800 text-white rounded hover:bg-gray-900">
                ← Kembali ke Dashboard
            </a>

            @forelse ($articles as $article)
                <div class="bg-white p-6 rounded-xl shadow border-l-4 border-indigo-600">
                    <h2 class="text-xl font-bold text-gray-900">
                        {{ $article->judul }}
                    </h2>

                    <p class="text-sm text-gray-500">
                        ✍ {{ $article->penulis }} |
                        📅 {{ \Carbon\Carbon::parse($article->tanggal_publikasi)->format('d M Y') }}
                    </p>

                    <p class="mt-4 text-gray-700">
                        {{ Str::limit(strip_tags($article->isi), 250) }}
                    </p>
                </div>
            @empty
                <div class="bg-yellow-100 text-yellow-800 p-4 rounded">
                    Belum ada artikel tersedia.
                </div>
            @endforelse

        </div>
    </div>
</x-app-layout>
