<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PoloBlueController extends Controller
{
    public function openPoloBlueView()
    {
        return view('catalogo.poloblue.poloblue');
    }
}
