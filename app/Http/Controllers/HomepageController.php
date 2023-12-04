<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function index(Category $category){
        $articles = Article::all();
        
        return view('home.homepage', compact('articles', 'category'));
    }
}