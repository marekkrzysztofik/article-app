<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function getArticles()
    {
        $authors = Author::all();
        $articles = Article::all();
        return view("home", ['articles' => $articles, 'authors' => $authors]);
    }
    public function articlesByAuthor($authorId)
    {
        $articles = Article::with('authors')->whereHas('authors', function ($query) use ($authorId) {
            $query->where('authors.id', '=', $authorId);
        })->get();
        return view("author", ['articles' => $articles]);
    }
    public function store(Request $data)
    {
        $article = new Article;
        $article->title = $data['title'];
        $article->content = $data['content'];
        $article->save();
        if ($data->has('authors')) {
            $article->authors()->sync($data['authors']);
        }
        return redirect()->route('articles.index');
    }
    public function show($id)
    {
        $article = Article::with('authors')->findOrFail($id);
        return view("article", ['article' => $article]);
    }
}
