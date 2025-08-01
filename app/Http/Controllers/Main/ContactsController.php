<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;

class ContactsController extends Controller
{
    public function index() {
        return view('main.contacts', ['title' => 'Контакты']);
    }
}
