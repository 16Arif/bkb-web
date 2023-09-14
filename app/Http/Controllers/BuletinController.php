<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BuletinController extends Controller
{
    //mengontrol menu buletin
    public function index()
    {
        return view('buletin.index', [
            "title" => "Buletin |",
        ]);
    }
}
