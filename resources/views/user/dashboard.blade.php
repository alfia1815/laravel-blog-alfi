<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800">
            Dashboard User
        </h2>
    </x-slot>

    <div class="py-8 bg-gray-100 min-h-screen">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-8">

            {{-- HERO USER (BIRU, TERLIHAT JELAS) --}}
            <div class="bg-blue-600 text-white rounded-2xl p-8 shadow-lg">
                <h1 class="text-3xl font-bold">
                    Selamat Datang, {{ auth()->user()->name }} 👋
                </h1>
                <p class="mt-2 text-lg">
                    Anda login sebagai <b>USER</b>. Selamat membaca artikel terbaru.
                </p>
            </div>

            {{-- STAT USER --}}
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

                {{-- TOTAL ARTIKEL --}}
                <div class="bg-white rounded-2xl p-6 shadow">
                    <h3 class="text-gray-500 uppercase text-sm">
                        Total Artikel Tersedia
                    </h3>
                    <p class="text-4xl font-bold text-blue-600 mt-2">
                        {{ \App\Models\Article::count() }}
                    </p>
                </div>

                {{-- BACA ARTIKEL --}}
                <div class="bg-white rounded-2xl p-6 shadow">
                    <h3 class="text-xl font-semibold text-gray-800">
                        Blog Artikel
                    </h3>
                    <p class="text-gray-600 mt-1">
                        Artikel yang dipublikasikan oleh admin
                    </p>

                    <a href="{{ route('blog.index') }}"
                       class="inline-block mt-4 bg-blue-600 hover:bg-blue-700 text-white px-5 py-2 rounded-lg transition">
                        📖 Baca Artikel
                    </a>
                </div>

                {{-- INFORMASI --}}
                <div class="bg-white rounded-2xl p-6 shadow">
                    <h3 class="text-xl font-semibold text-gray-800">
                        Informasi
                    </h3>
                    <ul class="mt-3 text-gray-600 space-y-1">
                        <li>• Artikel dikelola oleh Admin</li>
                        <li>• User hanya dapat membaca</li>
                        <li>• Konten terus diperbarui</li>
                    </ul>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>
