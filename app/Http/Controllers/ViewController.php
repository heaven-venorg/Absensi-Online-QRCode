<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{
    // To Root Direct
    public function index()
    {
        return view('page.root.index');
    }

    public function scanqr()
    {
        return view('page.root.scanqrcode');
    }
}