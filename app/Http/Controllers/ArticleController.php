<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Comment;
use App\Models\Video;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::orderBy('title')->get();
        $video = Video::find(1);

        return view('articles',[
            'articles' => $articles,
            'video' => $video
        ]);
    }

    public function create()
    {
        return view('form');
    }

    public function store(Request $request)
    {
        // $article = new Article();
        // $article->title = $request->title;
        // $article->content = $request->content;
        // $article->save();

        Article::create([
            'title' => $request->title,
            'content' => $request->content
        ]);

        dd('Article creer');
    }

    public function show($id)
    {
        $article = Article::findOrFail($id);
        // $article = Article::where('title', 'Magni neque perferendis quo sint.')->first();

        // $article = $articles[$id] ?? 'Pas de titre';

        return view('article', [
            'article' => $article
        ]);
    }

    public function contact()
    {
        return view('contact');
    }

    public function registration()
    {
        $article = Article::find(11);
        $video = Video::find(1);

        $comment1 = new Comment(['content' => "mon commentaire premier pour l'article" ]);
        $comment2 = new Comment(['content' => "mon commentaire deuxieme pour l'article" ]);
        $comment3 = new Comment(['content' => "mon commentaire troisieme pour l'article" ]);

        $article->comments()->saveMany([
            $comment1,
            $comment2
        ]);

        $video->comments()->save($comment3);
    }
}
