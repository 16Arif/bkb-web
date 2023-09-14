<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class PelayananController extends Controller
{
    //
    public function datarequest()
    {
        return view('/pelayanan/datarequest', [
            "title" => "Pelayanan |",
            "news" => News::latest()->paginate(5)
        ]);
    }
}
