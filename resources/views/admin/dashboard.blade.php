<x-app-layout>
    <x-slot name="header">
        <h2 style="font-size:22px;font-weight:700;color:#111827;">
            Dashboard Admin
        </h2>
    </x-slot>

    <div style="padding:32px;background:#f3f4f6;min-height:100vh">

        <!-- WELCOME CARD -->
        <div
            style="
                background:#2563eb;
                color:white;
                padding:28px;
                border-radius:14px;
                box-shadow:0 15px 30px rgba(0,0,0,0.2);
                margin-bottom:32px;
            "
        >
            <h1 style="font-size:26px;font-weight:800;">
                Selamat Datang, {{ auth()->user()->name }} 👋
            </h1>
            <p style="margin-top:8px;font-size:18px;">
                Anda login sebagai <b>ADMIN</b>
            </p>
        </div>

        <!-- GRID -->
        <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(260px,1fr));gap:24px">

            <!-- TOTAL ARTIKEL -->
            <div
                style="
                    background:white;
                    padding:24px;
                    border-radius:14px;
                    box-shadow:0 10px 25px rgba(0,0,0,0.1);
                "
            >
                <h3 style="font-size:18px;font-weight:700;color:#1f2937;">
                    Total Artikel
                </h3>

                <p style="font-size:36px;font-weight:900;color:#2563eb;margin-top:12px;">
                    {{ \App\Models\Article::count() }}
                </p>
            </div>

            <!-- KELOLA ARTIKEL -->
            <div
                style="
                    background:white;
                    padding:24px;
                    border-radius:14px;
                    box-shadow:0 10px 25px rgba(0,0,0,0.1);
                "
            >
                <h3 style="font-size:18px;font-weight:700;color:#1f2937;">
                    Manajemen
                </h3>

                <p style="margin-top:8px;color:#374151;">
                    Kelola Artikel
                </p>

                <a
                    href="{{ route('admin.articles.index') }}"
                    style="
                        display:inline-block;
                        margin-top:16px;
                        background:#2563eb;
                        color:white;
                        padding:10px 18px;
                        border-radius:8px;
                        font-weight:600;
                        text-decoration:none;
                    "
                >
                    Lihat Artikel
                </a>
            </div>

            <!-- TAMBAH ARTIKEL -->
            <div
                style="
                    background:white;
                    padding:24px;
                    border-radius:14px;
                    box-shadow:0 10px 25px rgba(0,0,0,0.1);
                "
            >
                <h3 style="font-size:18px;font-weight:700;color:#1f2937;">
                    Konten Baru
                </h3>

                <p style="margin-top:8px;color:#374151;">
                    Tambah Artikel Baru
                </p>

                <a
                    href="{{ route('admin.articles.create') }}"
                    style="
                        display:inline-block;
                        margin-top:16px;
                        background:#16a34a;
                        color:white;
                        padding:10px 18px;
                        border-radius:8px;
                        font-weight:600;
                        text-decoration:none;
                    "
                >
                    Tambah Artikel
                </a>
            </div>

        </div>
    </div>
</x-app-layout>
