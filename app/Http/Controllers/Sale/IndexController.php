<?php

namespace App\Http\Controllers\Sale;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index() {
        return view('sale.index', ['title' => 'Распродажа женской парфюмерии и косметики']);
    }
}
