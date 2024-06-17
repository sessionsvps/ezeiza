<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CatalogoController extends Controller
{
    public function openCatalogoView()
    {
        return view('catalogo.catalogo');
    }
}
