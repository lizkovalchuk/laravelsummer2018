<?php
namespace App\Http\Controllers;
use App\Article;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::all();
        return $articles;

        return view('info.article', ['articles' => $articles]);
    }
}