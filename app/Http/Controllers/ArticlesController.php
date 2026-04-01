<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    /**
     * Display the specified resource.
     */
    public function show(Request $request, Article $article)
    {
        return $article;
    }
}
