@extends('layouts.main')

@section('container')
    <section id="profile-pegawai" class="head-profile">
        <div class="container-fluid head-struktur">
            <div class="row g-0 mb-3">
                <div class="col-sm-6 col-md-8">
                    <h3>Struktur Organisasi Stasiun Geofisika Balikpapan</h1>
                </div>
            </div>
            <div class="row g-0 mt-3 gy-3">
                <div class="col">
                    <img src="img/struktur.png" alt="struktur-organisasi" class="img-fluid rounded">
                </div>
                <div id="sidecard-profil" class="col-lg-3 col-md-6">
                    <div class="side-card">
                        <div class="card border-light mb-3" style="max-width: 25rem;">
                            <div class="card-header">Berita</div>
                            <div class="card-body">
                                <ul class="list-group list-group-flush">
                                    @if ($news->count())
                                        @foreach ($news as $news)
                                            <li class="list-group-item"><a
                                                    href="/berita/{{ $news->slug }}">{{ $news->title }}</a><br>
                                                <span class="text-muted"
                                                    style="font-size: 12px">{{ $news->created_at->diffForHumans() }}</span>
                                            </li>
                                        @endforeach
                                    @else
                                        <p class="text-center fs-4">Berita belum ada</p>
                                    @endif
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </section>
@endsection
