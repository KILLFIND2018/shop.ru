<?php

namespace App\Http\Controllers\brends;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index() {
        return view('brends.index', ['title' => 'Бренды']);
    }
}
