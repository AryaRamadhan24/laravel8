<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SapiController extends Controller
{
    public function index()
    {
        return view('sapi.index');
    }

    public function create()
    {
        return view('sapi.tambah');
    }
}
