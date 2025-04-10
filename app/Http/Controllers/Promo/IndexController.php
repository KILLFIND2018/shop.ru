<?php

namespace App\Http\Controllers\Promo;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index() {
        return view('promo.index', ['title' => 'Акции интернет магазина']);
    }
}
