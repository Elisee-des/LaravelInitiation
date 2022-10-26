<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $articles = Article::all();

        return view('articles',[
            'articles' => $articles
        ]);
    }

    public function show($id)
    {
        $article = Article::findOrFail($id);
        // $article = Article::where('title', 'Magni neque perferendis quo sint.')->first();
        dd($article);

        // $articles = [
        //     1 => "Mon titre 1",
        //     2 => "Mon titre 2",
        //     3 => "Mon titre 3",
        //     4 => "Mon titre 4",
        //     5 => "Mon titre 5",
        // ];

        // $article = $articles[$id] ?? 'Pas de titre';

        return view('article', [
            'article' => $article
        ]);
    }

    public function contact()
    {
        return view('contact');
    }
}
