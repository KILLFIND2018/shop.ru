<?php

namespace App\Http\Controllers\News;

use App\Http\Controllers\Controller;

class NewsController extends Controller
{
    public function index()
    {
        return view('news.index', ['title' => 'Новости']);
    }
}
