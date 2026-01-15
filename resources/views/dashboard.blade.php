<x-app-layout>

    <!-- HEADER (BREEZE RESMI) -->
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Dashboard Admin
        </h2>
    </x-slot>

    <!-- CONTENT -->
    <div class="py-10 bg-gray-100">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-8">

            <!-- WELCOME CARD -->
            <div class="bg-white p-6 rounded-xl shadow flex items-center justify-between">
                <div>
                    <p class="text-gray-500 text-sm">Selamat datang</p>
                    <h3 class="text-2xl font-bold text-gray-800">
                        {{ auth()->user()->name }}
                    </h3>
                    <p class="text-sm text-gray-600">
                        Role: <span class="font-semibold uppercase">{{ auth()->user()->role }}</span>
                    </p>
                </div>
                <div class="text-5xl text-blue-600">
                    👤
                </div>
            </div>

            <!-- STATISTICS -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

                <!-- TOTAL ARTIKEL -->
                <div class="bg-white p-6 rounded-xl shadow border-t-4 border-blue-600">
                    <p class="text-sm text-gray-500">Total Artikel</p>
                    <p class="text-4xl font-bold text-gray-900 mt-2">
                        {{ $totalArtikel }}
                    </p>
                </div>

                <!-- KELOLA ARTIKEL -->
                <div class="bg-white p-6 rounded-xl shadow border-t-4 border-green-600">
                    <p class="text-sm text-gray-500">Manajemen</p>
                    <p class="text-xl font-semibold text-gray-900">
                        Kelola Artikel
                    </p>
                    <a href="{{ route('admin.articles.index') }}"
                       class="inline-block mt-4 bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded-lg transition">
                        Lihat Artikel
                    </a>
                </div>

                <!-- TAMBAH ARTIKEL -->
                <div class="bg-white p-6 rounded-xl shadow border-t-4 border-orange-500">
                    <p class="text-sm text-gray-500">Konten Baru</p>
                    <p class="text-xl font-semibold text-gray-900">
                        Tambah Artikel
                    </p>
                    <a href="{{ route('admin.articles.create') }}"
                       class="inline-block mt-4 bg-orange-500 hover:bg-orange-600 text-white px-4 py-2 rounded-lg transition">
                        Tambah Artikel
                    </a>
                </div>

            </div>

            <!-- INFO PANEL -->
            <div class="bg-white p-6 rounded-xl shadow">
                <h3 class="text-lg font-bold text-gray-800 mb-4">
                    Informasi Aplikasi
                </h3>
                <ul class="space-y-2 text-gray-700 list-disc ml-6">
                    <li>Aplikasi Blog berbasis <strong>Laravel</strong></li>
                    <li>Menggunakan arsitektur <strong>MVC</strong></li>
                    <li>Fitur Login, Role Admin, dan CRUD Artikel</li>
                    <li>Dibuat untuk <strong>Ujian Akhir Semester</strong></li>
                </ul>
            </div>

        </div>
    </div>

</x-app-layout>
