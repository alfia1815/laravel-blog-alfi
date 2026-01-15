<x-app-layout>
    <x-slot name="header">
        <h2 style="font-size:22px;font-weight:700;color:#111827">
            Tambah Artikel
        </h2>
    </x-slot>

    <div style="padding:32px;background:#f3f4f6;min-height:100vh">

        <div style="
            max-width:900px;
            margin:auto;
            background:white;
            padding:32px;
            border-radius:16px;
            box-shadow:0 20px 40px rgba(0,0,0,0.15);
        ">

            <!-- JUDUL HALAMAN -->
            <h1 style="font-size:26px;font-weight:800;color:#111827;margin-bottom:8px">
                📝 Tambah Artikel Baru
            </h1>
            <p style="color:#374151;margin-bottom:24px">
                Silakan isi data artikel dengan lengkap
            </p>

            <!-- FORM -->
            <form method="POST" action="{{ route('admin.articles.store') }}">
                @csrf

                <!-- JUDUL -->
                <div style="margin-bottom:20px">
                    <label style="font-weight:700;color:#111827">
                        Judul Artikel
                    </label>
                    <input type="text" name="judul" required
                           placeholder="Masukkan judul artikel"
                           style="
                                width:100%;
                                padding:14px;
                                margin-top:6px;
                                border-radius:10px;
                                border:1px solid #d1d5db;
                                font-size:15px;
                           ">
                </div>

                <!-- ISI -->
                <div style="margin-bottom:20px">
                    <label style="font-weight:700;color:#111827">
                        Isi Artikel
                    </label>
                    <textarea name="isi" rows="6" required
                              placeholder="Tulis isi artikel di sini..."
                              style="
                                    width:100%;
                                    padding:14px;
                                    margin-top:6px;
                                    border-radius:10px;
                                    border:1px solid #d1d5db;
                                    font-size:15px;
                              "></textarea>
                </div>

                <!-- PENULIS -->
                <div style="margin-bottom:20px">
                    <label style="font-weight:700;color:#111827">
                        Penulis
                    </label>
                    <input type="text" name="penulis"
                           value="{{ auth()->user()->name }}"
                           readonly
                           style="
                                width:100%;
                                padding:14px;
                                margin-top:6px;
                                border-radius:10px;
                                border:1px solid #d1d5db;
                                background:#e5e7eb;
                                font-size:15px;
                           ">
                </div>

                <!-- TANGGAL -->
                <div style="margin-bottom:28px">
                    <label style="font-weight:700;color:#111827">
                        Tanggal Publikasi
                    </label>
                    <input type="date" name="tanggal_publikasi" required
                           style="
                                width:100%;
                                padding:14px;
                                margin-top:6px;
                                border-radius:10px;
                                border:1px solid #d1d5db;
                                font-size:15px;
                           ">
                </div>

                <!-- BUTTON -->
                <div style="display:flex;gap:14px">
                    <button type="submit"
                        style="
                            background:#16a34a;
                            color:white;
                            padding:14px 28px;
                            border-radius:12px;
                            border:none;
                            font-weight:800;
                            cursor:pointer;
                            font-size:15px;
                        ">
                        ➕ Simpan Artikel
                    </button>

                    <a href="{{ route('admin.articles.index') }}"
                       style="
                            background:#374151;
                            color:white;
                            padding:14px 28px;
                            border-radius:12px;
                            text-decoration:none;
                            font-weight:800;
                            font-size:15px;
                       ">
                        ⬅ Kembali
                    </a>
                </div>
            </form>

        </div>
    </div>
</x-app-layout>
