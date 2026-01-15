<x-app-layout>
    <x-slot name="header">
        <h2 style="font-size:22px;font-weight:700;color:#111827">
            Edit Artikel
        </h2>
    </x-slot>

    <div style="padding:32px;background:#f3f4f6;min-height:100vh">
        <div style="
            max-width:800px;
            margin:auto;
            background:white;
            padding:32px;
            border-radius:16px;
            box-shadow:0 20px 40px rgba(0,0,0,0.15);
        ">

            <h1 style="font-size:24px;font-weight:800;color:#111827;margin-bottom:24px">
                ✏️ Edit Artikel
            </h1>

            <form method="POST" action="{{ route('admin.articles.update', $article) }}">
                @csrf
                @method('PUT')

                <!-- JUDUL -->
                <div style="margin-bottom:20px">
                    <label style="font-weight:700;color:#111827">Judul Artikel</label>
                    <input type="text" name="judul"
                           value="{{ old('judul', $article->judul) }}"
                           required
                           style="
                                width:100%;
                                padding:12px;
                                margin-top:6px;
                                border-radius:8px;
                                border:1px solid #d1d5db;
                           ">
                </div>

                <!-- PENULIS -->
                <div style="margin-bottom:20px">
                    <label style="font-weight:700;color:#111827">Penulis</label>
                    <input type="text" name="penulis"
                           value="{{ old('penulis', $article->penulis) }}"
                           required
                           style="
                                width:100%;
                                padding:12px;
                                margin-top:6px;
                                border-radius:8px;
                                border:1px solid #d1d5db;
                           ">
                </div>

                <!-- TANGGAL -->
                <div style="margin-bottom:20px">
                    <label style="font-weight:700;color:#111827">Tanggal Publikasi</label>
                    <input type="date" name="tanggal_publikasi"
                           value="{{ old('tanggal_publikasi', $article->tanggal_publikasi) }}"
                           required
                           style="
                                width:100%;
                                padding:12px;
                                margin-top:6px;
                                border-radius:8px;
                                border:1px solid #d1d5db;
                           ">
                </div>

                <!-- ISI -->
                <div style="margin-bottom:28px">
                    <label style="font-weight:700;color:#111827">Isi Artikel</label>
                    <textarea name="isi" rows="6" required
                              style="
                                    width:100%;
                                    padding:12px;
                                    margin-top:6px;
                                    border-radius:8px;
                                    border:1px solid #d1d5db;
                              ">{{ old('isi', $article->isi) }}</textarea>
                </div>

                <!-- BUTTON -->
                <div style="display:flex;gap:12px">
                    <button type="submit"
                        style="
                            background:#2563eb;
                            color:white;
                            padding:12px 24px;
                            border-radius:10px;
                            border:none;
                            font-weight:700;
                            cursor:pointer;
                        ">
                        💾 Update
                    </button>

                    <a href="{{ route('admin.articles.index') }}"
                       style="
                            background:#374151;
                            color:white;
                            padding:12px 24px;
                            border-radius:10px;
                            text-decoration:none;
                            font-weight:700;
                       ">
                        ⬅ Kembali
                    </a>
                </div>

            </form>
        </div>
    </div>
</x-app-layout>
