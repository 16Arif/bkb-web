@extends('layouts.main')

@section('container')
    {{-- Hero Section --}}
    <section id="hero">
        <div class="container h-100 text-center">
            <div class="row h-100 justify-content-center">
                <div class="hero-text col-md-10 my-auto">
                    {{-- <h1>Stasiun Geofisika Balikpapan</h1> --}}
                    <p><span class="fw-bold"> UPT BMKG </span>yang mengamati fenomena alam yang berkaitan dengan ilmu
                        geofisika <br> yang ada di Pulau Kalimantan dan sekitarnya</p>
                </div>
            </div>
        </div>
    </section>

    {{-- Berita Section --}}
    <section id="berita">
        <div class="container-fluid mb-5">
            <div class="row">
                <div class="col">
                    <h3 class="mt-5">Berita Terbaru</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8">
                    @if ($news->count())
                        <h4 class="mb-3">{{ $title }} </h4>
                        @foreach ($news as $news)
                            <div class="card mb-3">
                                <div class="row g-0">
                                    <div class="col mt-2 my-auto">
                                        <img src="https://source.unsplash.com/400x250?news,water"
                                            class="img-fluid rounded-start" alt="bg-card">
                                    </div>
                                    <div class="col">
                                        <div class="card-body">
                                            <h5 class="card-title"><a
                                                    href="/berita/{{ $news->slug }}">{{ $news->title }}</a>
                                            </h5>
                                            <p>
                                                Oleh : <a href="/authors/{{ $news->author->username }}">
                                                    {{ $news->author->name }}</a><small class="text-muted">
                                                    {{ $news->created_at->diffForHumans() }}
                                                </small>
                                            </p>
                                            <p>{{ $news->excerpt }}...</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                        <div class="more">
                            <a href="/berita">
                                <p>Lihat berita lainnya...</p>
                            </a>
                        </div>
                    @else
                        <p class="text-center fs-4">Berita belum ada</p>
                    @endif
                </div>
                <div id="sidecard-profil" class="col-lg-4 col-md-8">
                    @include('partials.sidehome')
                </div>
            </div>
        </div>
    </section>

    {{-- Video Section --}}
    <section id="video">
        <div class="container mt-5">
            <div class="row h-120">
                <div class="col">
                    <h3 class="mt-3">Video</h3>
                    <div class="card">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/T0JWIV7j8-4"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                    </div>
                    <div class="mt-2 mb-3">
                        <div class="g-ytsubscribe" data-channelid="UCnS_MZlKoHu8KjoZQzP06WQ" data-layout="default"
                            data-count="hidden"></div>
                    </div>
                </div>
                <div class="col">
                    <div class="mt-5">
                        <h6>Video Lainnya</h6>
                        <ul class="list-group list-group-flush">
                            <a href="#" class="list-group-item">
                                <iframe width="150" height="70" src="https://www.youtube.com/embed/zOtsNFNVCGQ"
                                    title="YouTube video player" frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen></iframe>
                            </a>
                            <a href="#" class="list-group-item">A third link item</a>
                            <a href="#" class="list-group-item">A fourth link item</a>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- Infografis Section --}}

    <section id="infografis">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <h3>Infografis Stageof Balikpapan</h3>
                    <span class="subtitle">Informasi Hasil Pengamatan dan Analisa disajikan berupa infografis yang mudah
                        didapat dan
                        dipahami</span>
                </div>
            </div>
            <div class="row mt-3 gy-3">
                <div class="col-lg-4">
                    <a href="/infografisgempa">
                        <div class="card card-infografis">
                            <img src="https://source.unsplash.com/400x250?news,water" class="card-img-top"
                                alt="infografis-gempabumi">
                            <div class="card-body">
                                <h4 class="mt-3">Infografis Gempabumi</h4>
                                <p class="mt-2">Informasi gempabumi yang terjadi ...</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4">
                    <a href="/infografispetir">
                        <div class="card card-infografis">
                            <img src="https://source.unsplash.com/400x250?news,water" class="card-img-top"
                                alt="infografis-petir">
                            <div class="card-body">
                                <h4 class="mt-3">Infografis Petir</h4>
                                <p class="mt-2">Informasi gempabumi yang terjadi ...</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4">
                    <a href="/infografis-ttm">
                        <div class="card card-infografis">
                            <img src="https://source.unsplash.com/400x250?news,water" class="card-img-top"
                                alt="infografis-ttm">
                            <div class="card-body">
                                <h4 class="mt-3">Infografis Terbit Terbenam Matahari</h4>
                                <p class="mt-2">Informasi gempabumi yang terjadi ...</p>
                            </div>
                        </div>
                    </a>
                </div>

            </div>
        </div>
    </section>
@endsection()
