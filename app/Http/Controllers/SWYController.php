<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SWYController extends Controller
{
    public function openSWYView()
    {
        return view('catalogo.swy.swy');
    }
}
