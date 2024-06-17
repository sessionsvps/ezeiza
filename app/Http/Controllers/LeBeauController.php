<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LeBeauController extends Controller
{
    public function openLeBeauView()
    {
        return view('catalogo.lebeau.lebeau');
    }
}
