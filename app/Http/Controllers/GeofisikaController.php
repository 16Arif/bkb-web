<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GeofisikaController extends Controller
{
    public function index()
    {
        return view('geofisika/mitigasigempa', [
            "title" => "Mitigasi Gempabumi "
        ]);
    }
}
