<?php

namespace App\Http\Controllers\Sale;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MenController extends Controller
{
    public function men() {
        return view('sale.men', ['title' => 'Распродажа мужской парфюмерии и косметики']);
    }
}
