<?php

namespace App\Http\Controllers\News;

use App\Http\Controllers\Controller;
use App\Models\News;

class NewsController extends Controller
{
    public function index()
    {
        $news = News::all();


        return view('news.index', ['title' => 'Новости'], compact('news'));
    }
}
