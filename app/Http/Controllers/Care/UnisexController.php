<?php

namespace App\Http\Controllers\Care;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UnisexController extends Controller
{
    public function unisex() {

        return view('care.unisex', ['title' => 'Унисекс уходовая косметика']);
    }
}
