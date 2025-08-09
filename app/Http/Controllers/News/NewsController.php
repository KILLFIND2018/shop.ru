<?php

namespace App\Http\Controllers\News;

use App\Http\Controllers\Controller;
use App\Models\News;

class NewsController extends Controller
{
    public function __invoke()
    {
        $news = News::paginate(10);


        return view('news.index', [
            'title' => 'Новости',
            'news' => $news,
            ]);
    }
}
