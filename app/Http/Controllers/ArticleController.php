<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::latest()->get();
        return view('admin.kelola-artikel', compact('articles'));
    }

    public function showById($id)
    {
        $article = Article::findOrFail($id);
        return view('pages.artikel', compact('article'));
    }

    public function create()
    {
        return view('admin.add-artikel');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $data = $request->all();

        if ($request->hasFile('image')) {
            $filename = time() . '.' . $request->image->extension();
            $request->image->move(public_path('images/artikel/'), $filename);
            $data['image'] = 'images/artikel/' . $filename;
        }

        Article::create($data);

        return redirect()->route('admin.articles')->with('success', 'Artikel berhasil ditambahkan.');
    }

    public function destroy($id)
    {
        $article = Article::findOrFail($id);
        $article->delete();

        return redirect()->route('admin.articles')->with('success', 'Artikel berhasil dihapus.');
    }
}
