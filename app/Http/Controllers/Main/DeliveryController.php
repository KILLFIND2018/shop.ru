<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DeliveryController extends Controller
{
    public function index() {
        return view('main.delivery', ['title' => 'Доставка']);
    }
}
