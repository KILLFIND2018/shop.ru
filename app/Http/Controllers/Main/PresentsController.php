<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;

class PresentsController extends Controller
{
    public function index()
    {
       return view('main.presents', ['title'=> 'Подарки']);
    }
}
