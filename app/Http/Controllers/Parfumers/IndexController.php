<?php

namespace App\Http\Controllers\Parfumers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index() {
        return view('submain.parfumers', ['title' => 'Парфюмеры']);
    }
}
