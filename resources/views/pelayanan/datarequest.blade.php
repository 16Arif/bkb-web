@extends('layouts.main')

@section('container')
    <section id="pelayanan">
        <div class="container-fluid">
            <div class="row g-0">
                <div class="col">
                    <h5>Pusat Layanan Permintaan Data Gempabumi dan Petir <br>
                        Stasiun Geofisika Balikpapan</h5>
                </div>
            </div>
            <div class="row g-0 gy-3">
                <div class="col-lg-8 col-md-12">
                    <div class="card card-pelayanan ">
                        <div class="card-head">
                            <p class="text-center mt-3">ALUR PERMINTAAN DATA</p>
                        </div>
                        <div class="card-body">
                            <img src="/img/permintaandata.png" alt="permintaan data" class="img-fluid">
                            <p class="mt-3 mb-2 p-4">Formulir permintaan data <a
                                    href="http://bit.ly/FormulirPermintaanDataOnline" target="_blank"><span> klik disini
                                        !</span></a></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-12">
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
