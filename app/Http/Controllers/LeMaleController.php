<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LeMaleController extends Controller
{
    public function openLeMaleView()
    {
        return view('catalogo.lemale.lemale');
    }
}
