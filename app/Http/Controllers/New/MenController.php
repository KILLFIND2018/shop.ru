<?php

namespace App\Http\Controllers\New;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MenController extends Controller
{
    public function men() {

        return view('new.men', ['title' => 'Новинки мужской парфюмерии']);
    }
}
