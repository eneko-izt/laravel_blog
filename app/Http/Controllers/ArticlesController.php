<?php

namespace App\Http\Controllers;

use App\Article;
use App\User;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    public function index()
    {
        $articles = Article::latest()->get();

        return view('articles/index', ['articles' => $articles]);
    }

    public function show(Article $article)
    {

 //       $article = Article::findOrFail($id);
        return view('articles.show', ['article' => $article]);
    }

    public function create()
    {
        return view('articles.create');
    }

    public function store()
    {
        // factory(User::class, 3)->create();
        // factory(Article::class, 3)->create([
        //     'user_id' => 1
        // ]);

        // dd(Article::find(1)->author());

        Article::create($this->validateArticle());

     
        return redirect(route("articles.index"));
    }

    public function edit($id)
    {
        $article = Article::find($id);
        return view('articles.edit', compact('article'));
    }

    public function update(Article $article)
    {
        $article->update($this->validateArticle());

        return redirect($article->path());
    }

    protected function validateArticle()
    {
        return request()->validate([
            'title' => 'required',
            'excerpt' => 'required',
            'body' => 'required'
        ]);
    }
}
