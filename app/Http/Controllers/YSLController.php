<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class YSLController extends Controller
{
    public function openYSLView()
    {
        return view('catalogo.ysl.ysl');
    }
}
