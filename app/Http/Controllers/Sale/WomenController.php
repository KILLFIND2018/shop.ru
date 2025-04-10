<?php

namespace App\Http\Controllers\Sale;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WomenController extends Controller
{
    public function women() {
        return view('sale.women', ['title' => 'Распродажа женской парфюмерии и косметики']);
    }
}
