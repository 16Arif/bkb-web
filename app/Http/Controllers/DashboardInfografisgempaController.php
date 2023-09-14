<?php

namespace App\Http\Controllers;

use App\Models\Infografisgempa;
use Illuminate\Http\Request;
use illuminate\Support\Str;
use Cviebrock\EloquentSluggable\Services\SlugService;


class DashboardInfografisgempaController extends Controller
{

    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $infografisgempa = Infografisgempa::latest();
        return view('dashboard.infografisgempa.index', [
            'infografisgempa' => $infografisgempa->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.infografisgempa.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'title' => 'required|max:255',
            'slug' => 'required|unique:news',
            'body' => 'required'
        ]);
        $validateData['user_id'] = auth()->user()->id;
        $validateData['excerpt'] = Str::limit(strip_tags($request->body), 100);

        Infografisgempa::create($validateData);

        return redirect('/dashboard/infografisgempa')->with('success', 'Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Infografisgempa  $infografisgempa
     * @return \Illuminate\Http\Response
     */
    public function show(Infografisgempa $infografisgempa)
    {
        return view('dashboard.infografisgempa.show', [
            'infografisgempa' => $infografisgempa
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Infografisgempa  $infografisgempa
     * @return \Illuminate\Http\Response
     */
    public function edit(Infografisgempa $infografisgempa)
    {
        return view(
            'dashboard.infografisgempa.edit',
            [
                'infografisgempa' => $infografisgempa
            ]
        );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Infografisgempa  $infografisgempa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Infografisgempa $infografisgempa)
    {
        $rules = ([
            'title' => 'required|max:255',
            'body' => 'required',

        ]);
        if ($request->slug != $infografisgempa->slug) {
            $rules['slug'] = 'required|unique:news';
        }

        $validateData['user_id'] = auth()->user()->id;
        $validateData = $request->validate($rules);

        // $validateData['excerpt'] = Str::limit(strip_tags($request->body), 100);

        Infografisgempa::where('id', $infografisgempa->id)
            ->update($validateData);

        return redirect('/dashboard/infografisgempa')->with('success', 'Data Berhasil Ditambahkan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Infografisgempa  $infografisgempa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Infografisgempa $infografisgempa)
    {
        Infografisgempa::destroy($infografisgempa->id);
        return redirect('/dashboard/infografisgempa')->with('success', 'Data Berhasil Dihapus');
    }
    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(News::class, 'slug', $request->title);
        return response()->json(['slug' => $slug]);
    }
}
