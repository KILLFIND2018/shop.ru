<?php

namespace App\Http\Controllers\Care;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index() {
        return view('care.index', ['title' => 'Уходовая косметика']);
    }
}
