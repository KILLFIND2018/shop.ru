<?php

namespace App\Http\Controllers\Sale;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UnisexController extends Controller
{
    public function unisex() {
        return view('sale.unisex', ['title' => 'Распродажа унисекс парфюмерии и косметики']);
    }
}
