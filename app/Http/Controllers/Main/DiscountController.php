<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;

class DiscountController extends Controller
{
    public function index()
    {
        return view('main.discount', ['title' => 'Скидки']);
    }
}
