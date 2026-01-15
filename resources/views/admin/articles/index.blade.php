<x-app-layout>
    <x-slot name="header">
        <h2 style="font-size:22px;font-weight:700;color:#111827;">
            Daftar Artikel
        </h2>
    </x-slot>

    <div style="padding:32px;background:#f3f4f6;min-height:100vh">

        <!-- HEADER ACTION -->
        <div style="display:flex;justify-content:space-between;align-items:center;margin-bottom:24px">
            <div>
                <h1 style="font-size:24px;font-weight:800;color:#111827;">
                    Manajemen Artikel
                </h1>

                <!-- TOMBOL KEMBALI -->
                <a href="{{ route('dashboard') }}"
                   style="
                        display:inline-block;
                        margin-top:8px;
                        background:#374151;
                        color:white;
                        padding:8px 16px;
                        border-radius:8px;
                        font-weight:600;
                        text-decoration:none;
                   ">
                    ⬅ Kembali ke Dashboard
                </a>
            </div>

            <a href="{{ route('admin.articles.create') }}"
               style="
                    background:#16a34a;
                    color:white;
                    padding:10px 18px;
                    border-radius:10px;
                    font-weight:600;
                    text-decoration:none;
                    box-shadow:0 6px 15px rgba(0,0,0,0.15);
               ">
                + Tambah Artikel
            </a>
        </div>

        <!-- CARD TABLE -->
        <div style="
            background:white;
            border-radius:16px;
            padding:24px;
            box-shadow:0 20px 40px rgba(0,0,0,0.12);
        ">

            @if (session('success'))
                <div style="
                    background:#dcfce7;
                    color:#166534;
                    padding:14px 18px;
                    border-radius:10px;
                    margin-bottom:18px;
                    font-weight:600;
                ">
                    {{ session('success') }}
                </div>
            @endif

            <table style="width:100%;border-collapse:collapse">
                <thead>
                    <tr style="background:#1f2937;color:white">
                        <th style="padding:12px;border-radius:8px 0 0 8px">No</th>
                        <th style="padding:12px;text-align:left">Judul</th>
                        <th style="padding:12px">Penulis</th>
                        <th style="padding:12px">Tanggal</th>
                        <th style="padding:12px;border-radius:0 8px 8px 0">Aksi</th>
                    </tr>
                </thead>

                <tbody>
                    @forelse ($articles as $article)
                        <tr style="border-bottom:1px solid #e5e7eb">
                            <td style="padding:12px;text-align:center;font-weight:600">
                                {{ $loop->iteration }}
                            </td>

                            <td style="padding:12px;font-weight:600;color:#111827">
                                {{ $article->judul }}
                            </td>

                            <td style="padding:12px;text-align:center">
                                {{ $article->penulis }}
                            </td>

                            <td style="padding:12px;text-align:center">
                                {{ \Carbon\Carbon::parse($article->tanggal_publikasi)->format('d-m-Y') }}
                            </td>

                            <td style="padding:12px;text-align:center">
                                <a href="{{ route('admin.articles.edit', $article) }}"
                                   style="
                                        background:#2563eb;
                                        color:white;
                                        padding:6px 12px;
                                        border-radius:6px;
                                        text-decoration:none;
                                        font-weight:600;
                                        margin-right:6px;
                                   ">
                                    Edit
                                </a>

                                <form action="{{ route('admin.articles.destroy', $article) }}"
                                      method="POST"
                                      style="display:inline"
                                      onsubmit="return confirm('Yakin hapus artikel ini?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                        style="
                                            background:#dc2626;
                                            color:white;
                                            padding:6px 12px;
                                            border-radius:6px;
                                            border:none;
                                            font-weight:600;
                                            cursor:pointer;
                                        ">
                                        Hapus
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" style="padding:20px;text-align:center;color:#6b7280">
                                Belum ada artikel.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>
