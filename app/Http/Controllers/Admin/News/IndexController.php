<?php

namespace App\Http\Controllers\Admin\News;

use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke()
    {
        $news = News::paginate(10); // Активные новости
        $trashedNews = News::onlyTrashed()->paginate(10); // Удалённые новости

        return view('admin.news.index', [
            'title' => 'Управление новостями',
            'news' => $news,
            'trashedNews' => $trashedNews,
        ]);
    }
}
