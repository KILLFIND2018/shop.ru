<?php

namespace App\Http\Controllers\Parfum;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MenController extends Controller
{
    public function men() {

        return view('parfum.men', ['title' => 'Мужская парфюмерия']);
    }
}
