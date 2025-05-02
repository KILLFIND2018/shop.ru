<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WorktimeController extends Controller
{
    public function index() {
        return view('main.worktime', ['title' => 'График работы']);
    }
}
