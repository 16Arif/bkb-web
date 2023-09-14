<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;
use Illuminate\Http\Request;
use App\Models\News;

class PegawaiController extends Controller
{
    public function index()
    {
        return view('profile.staf', [
            "title" => "Profil Pegawai |",
            "pegawai" => Pegawai::all(),
            "news" => News::latest()->paginate(5)
        ]);
    }
}
