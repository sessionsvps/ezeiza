<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ScandalController extends Controller
{
    public function openScandalView()
    {
        return view('catalogo.scandal.scandal');
    }
}
