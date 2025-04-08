<?php

namespace App\Http\Controllers\New;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WomenController extends Controller
{
    public function women() {

        return view('new.women', ['title' => 'Новинки женской парфюмерии']);
    }
}
