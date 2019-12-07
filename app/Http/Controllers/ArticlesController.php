<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class ArticlesController extends Controller
{
    public function show(Request $request, Article $article)
    {
        return $article;
    }
}
