<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\User;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    //mengontrol menu berita
    public function berita()
    {
        $title = '';
        if (request('author')) {
            $author = User::firstWhere('username', request('author'));
            $title = 'oleh ' . $author->name;
        }

        return view('berita.berita', [
            "title" => "Berita " . $title,
            // "newslater" => News::all()
            "newss" => News::latest()->filter(request(['search', 'author']))->paginate(7)->withQueryString()
            // "news" => $news->get()
        ]);
    }
    public function beritasigle(News $news)
    {
        return view('berita.berita-sigle', [
            "title" => "Berita ",
            "news" => $news
        ]);
    }

    //berita berdasarkan user
    public function beritauser(User $author)
    {
        return view('berita.berita', [
            'title' => "$author->name ",
            'news' => $author->news->load('author')
        ]);
    }
}
