<?php

namespace App\Http\Controllers\Articles;

use App\Http\Controllers\Controller;
use App\Models\Articles;
use Illuminate\Http\Request;

class ShowController extends Controller
{
    public function __invoke(Articles $articles)
    {
        return view('articles.show', [
            'articles' => $articles,
            'title' => 'Статьи'
        ]);
    }
}
