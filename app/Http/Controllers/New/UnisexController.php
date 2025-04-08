<?php

namespace App\Http\Controllers\New;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UnisexController extends Controller
{
    public function unisex() {

        return view('new.unisex', ['title' => 'Новинки унисекс парфюмерии']);
    }
}
