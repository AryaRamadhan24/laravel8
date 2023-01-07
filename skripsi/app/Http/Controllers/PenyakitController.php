<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PenyakitController extends Controller
{
    public function index()
    {
        return view('penyakit.index');
    }
}
