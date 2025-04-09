<?php

namespace App\Http\Controllers\Parfum;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index() {
        return view('parfum.index', ['title' => 'Парфюмерия']);
    }
}
