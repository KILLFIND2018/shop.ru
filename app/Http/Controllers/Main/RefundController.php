<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RefundController extends Controller
{
    public function index() {
        return view('main.refund', ['title' => 'Возврат товаров и денежных средств']);
    }
}
