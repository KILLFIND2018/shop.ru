<?php

namespace App\Http\Controllers\Care;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MenController extends Controller
{
    public function men() {

        return view('care.men', ['title' => 'Мужская уходовая косметика']);
    }
}
