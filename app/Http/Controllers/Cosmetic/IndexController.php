<?php

namespace App\Http\Controllers\Cosmetic;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index() {
        return view('cosmetic.index', ['title' => 'Косметика']);
    }
}
