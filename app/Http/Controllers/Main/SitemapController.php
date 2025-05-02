<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SitemapController extends Controller
{
    public function index() {
        return view('main.sitemap', ['title' => 'Карта сайта']);
    }
}
