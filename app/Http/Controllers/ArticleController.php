<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /* ================= ADMIN ================= */

    public function index()
    {
        $articles = Article::latest()->get();
        return view('admin.articles.index', compact('articles'));
    }

    public function create()
    {
        return view('admin.articles.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'isi' => 'required',
            'penulis' => 'required',
            'tanggal_publikasi' => 'required|date',
        ]);

        Article::create($request->all());

        return redirect()
            ->route('admin.articles.index')
            ->with('success', 'Artikel berhasil ditambahkan');
    }

    public function edit(Article $article)
    {
        return view('admin.articles.edit', compact('article'));
    }

    public function update(Request $request, Article $article)
    {
        $request->validate([
            'judul' => 'required',
            'isi' => 'required',
            'penulis' => 'required',
            'tanggal_publikasi' => 'required|date',
        ]);

        $article->update($request->all());

        return redirect()
            ->route('admin.articles.index')
            ->with('success', 'Artikel berhasil diperbarui');
    }

    public function destroy(Article $article)
    {
        $article->delete();
        return back()->with('success', 'Artikel berhasil dihapus');
    }

    /* ================= USER ================= */

    public function publicIndex()
    {
        $articles = Article::latest()->get();
        return view('blog.index', compact('articles'));
    }

    public function showPublic(Article $article)
    {
        return view('blog.show', compact('article'));
    }
}
