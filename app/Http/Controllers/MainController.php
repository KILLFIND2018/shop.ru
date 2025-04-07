<?php

namespace App\Http\Controllers;


class MainController extends Controller
{
    public function index() {
        return view('main.index', ['title' => 'Главная']);
    }

    public function new() {
        return view('main.new', ['title' => 'Новинки']);
    }
}
