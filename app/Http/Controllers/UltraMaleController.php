<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UltraMaleController extends Controller
{
    public function openUltraMaleView()
    {
        return view('catalogo.ultramale.ultramale');
    }
}
