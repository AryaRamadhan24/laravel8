<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GejalaController extends Controller
{
    public function index()
    {
        return view('gejala.index');
    }
}
