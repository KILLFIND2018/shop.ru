<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function index() {
        return view('main.payment', ['title' => 'Оплата заказов']);
    }
}
