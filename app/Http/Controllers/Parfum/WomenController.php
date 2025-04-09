<?php

namespace App\Http\Controllers\Parfum;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WomenController extends Controller
{
    public function women() {

        return view('parfum.women', ['title' => 'Женская парфюмерия']);
    }
}
