<?php

namespace App\Http\Controllers;

class ArticleController extends Controller
{
    public function index()
    {
        return view('articles');
    }

    public function show(Article $article)
    {
        return view('article', ['article' => $article]);
    }
}
