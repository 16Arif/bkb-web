@extends('layouts.main')

@section('container')
    <section id="infografis-three">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <h3>Infografis Stageof Balikpapan</h3>
                </div>
            </div>
            <div class="row gy-3 mb-3">
                <div class="mb-3">
                    <h5>Infografis Gempabumi</h5>
                </div>
                @foreach ($infografisgempa as $infogb)
                    <div class="col-md-4">
                        <div class="card card-infografis-three">
                            <div class="row">
                                <div class="col">
                                    <div class="card-body">
                                        <h5 class="card-title"><a
                                                href="/berita/{{ $infogb->slug }}">{{ $infogb->title }}</a>
                                        </h5>
                                        <p>
                                            <small class="text-muted">
                                                {{ $infogb->created_at->diffForHumans() }}
                                            </small>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

                <a href="/infografisgempa">
                    <div class="d-grid gap-2 col-lg-3 col-sm-4 mx-auto">
                        <button type="button" class="btn btn-outline-success text-center">Lihat lebih
                            banyak...
                        </button>
                    </div>
                </a>

                <hr>
            </div>
            <div class="row gy-3 mb-3">
                <div class="mb-3">
                    <h5>Infografis Petir</h5>
                </div>
                @foreach ($infografispetir as $infopetir)
                    <div class="col-md-4">
                        <div class="card card-infografis-three">
                            <div class="row">
                                <div class="col">
                                    <div class="card-body">
                                        <h5 class="card-title"><a
                                                href="/berita/{{ $infopetir->slug }}">{{ $infopetir->title }}</a>
                                        </h5>
                                        <p>
                                            <small class="text-muted">
                                                {{ $infopetir->created_at->diffForHumans() }}
                                            </small>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                <a href="/infografispetir">
                    <div class="d-grid gap-2 col-lg-3 col-sm-4 mx-auto">
                        <button type="button" class="btn btn-outline-success text-center">Lihat lebih
                            banyak...
                        </button>
                    </div>
                </a>
                <hr>
            </div>
            <div class="row gy-3">
                <div class="mb-3">
                    <h5>Infografis Terbit Terbenam Matahari</h5>
                </div>
                @foreach ($infografisTTM as $infottm)
                    <div class="col-md-4">
                        <div class="card card-infografis-three">
                            <div class="row">
                                <div class="col">
                                    <div class="card-body">
                                        <h5 class="card-title"><a
                                                href="/berita/{{ $infottm->slug }}">{{ $infottm->title }}</a>
                                        </h5>
                                        <p>
                                            <small class="text-muted">
                                                {{ $infottm->created_at->diffForHumans() }}
                                            </small>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                <a href="/infografis-ttm">
                    <div class="d-grid gap-2 col-lg-3 col-sm-4 mx-auto">
                        <button type="button" class="btn btn-outline-success text-center">Lihat lebih
                            banyak...
                        </button>
                    </div>
                </a>
            </div>
        </div>
        </div>
    </section>
@endsection
