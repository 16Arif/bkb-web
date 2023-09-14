<?php
//mengontrol tab publikasi
namespace App\Http\Controllers;

use App\Models\Infografisgempa;
use App\Models\Infografispetir;
use App\Models\InfografisTTM;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\News;


class InfografisController extends Controller
{
    // --------controler pada menu infografis---------
    public function index()
    {
        return view('infografis.infografis', [
            "title" => "Infografis |",
            "infografisgempa" => Infografisgempa::latest()->paginate(6),
            "infografispetir" => Infografispetir::latest()->paginate(6),
            "infografisTTM" => InfografisTTM::latest()->paginate(6)
        ]);
    }

    public function infografisgempa()
    {
        return view('infografis.infografi', [
            "title" => "Infografis Gempa",
            "infografis" => Infografisgempa::latest()->paginate(10),
            "news" => News::latest()->paginate(5)
        ]);
    }

    public function infografispetir()
    {
        return view('infografis.infografi', [
            "title" => "Infografis Petir",
            "infografis" => Infografispetir::latest()->paginate(10),
            "news" => News::latest()->paginate(5)
        ]);
    }

    public function infografisttm()
    {
        return view('infografis.infografi', [
            "title" => "Infografis Terbit Terbenam Matahari",
            "infografis" => InfografisTTM::latest()->paginate(10),
            "news" => News::latest()->paginate(5)
        ]);
    }
}
