<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\News;


class ProfileController extends Controller
{


    public function struktur()
    {
        return view('profile/strukture-organisasi', [
            "title" => "Struktur Organisasi |",
            "news" => News::latest()->paginate(5)
        ]);
    }
    public function stasiun()
    {
        return view('profile/profil-stasiun', [
            "title" => "Porfil |",
            "news" => News::latest()->paginate(5)
        ]);
    }
    public function visimisi()
    {
        return view('profile/visimisi', [
            "title" => "Visi Misi |",
            "news" => News::latest()->paginate(5)
        ]);
    }

    public function tentang()
    {
        return view('profile/tentang', [
            "title" => "Visi Misi |",
            "news" => News::latest()->paginate(5)
        ]);
    }
}
