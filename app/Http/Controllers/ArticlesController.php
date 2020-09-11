<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class ArticlesController extends Controller
{
    public function show(Request $request, Article $article)
    {
        return $article;
    }
}
