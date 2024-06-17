<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ErosFlameController extends Controller
{
    public function openErosFlameView()
    {
        return view('catalogo.erosflame.erosflame');
    }
}
