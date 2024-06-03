<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function addarticles()
    {
        $articles = Article::all();
        return view('admin.artikel', compact('articles'));
    }

    public function store(Request $request)
    {
        $data = Article::create($request->all());
        if ($request->hasFile('image')) {
            $request->file('image')->move('img/upload/article', $request->file('image')->getClientOriginalName());
            $data->image = $request->file('image')->getClientOriginalName();
            $data->save();
        }
        session()->flash('success', 'Data berhasil diinput');
        return redirect()->route('admin.dashboard');
    }

    public function artikel()
    {
        $articles = Article::all();
        return view('user.article', compact('articles'));
    }

    public function isiartikel($id)
    {
        $articles = Article::findOrFail($id);
        return view('user.isiarticle', compact('articles'));
    }
}
