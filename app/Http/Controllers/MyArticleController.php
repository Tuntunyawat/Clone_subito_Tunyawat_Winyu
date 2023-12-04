<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class MyArticleController extends Controller
{
    public function index(){

        $articles = Article::all();
        return view('users.myArticle', compact('articles'));
    }
}