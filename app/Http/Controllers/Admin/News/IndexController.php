<?php

namespace App\Http\Controllers\Admin\News;

use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke()
    {
        $news = News::paginate(10);


        return view('admin.news.index', [
            'title' => 'Управление новостями',
            'news' => $news,
        ]);
    }
}
