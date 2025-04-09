<?php

namespace App\Http\Controllers\Parfum;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UnisexController extends Controller
{
    public function unisex() {

        return view('parfum.unisex', ['title' => 'Унисекс парфюмерия']);
    }
}
