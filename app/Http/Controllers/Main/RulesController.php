<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RulesController extends Controller
{
    public function index() {
        return view('main.rules', ['title' => 'Политика конфиденциальности']);
    }
}
