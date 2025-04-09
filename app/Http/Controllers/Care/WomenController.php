<?php

namespace App\Http\Controllers\Care;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WomenController extends Controller
{
    public function women() {

        return view('care.women', ['title' => 'Женская уходовая косметика']);
    }
}
