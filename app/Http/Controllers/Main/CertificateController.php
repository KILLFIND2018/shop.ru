<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CertificateController extends Controller
{
    public function index()
    {
        return view('main.certificate', ['title'=> 'Подарочные сертификаты']);
    }
}
