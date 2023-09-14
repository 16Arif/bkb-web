@extends('layouts.main')

@section('container')
    <section id="profile-pegawai" class="head-profile">
        <div class="container-fluid head-struktur">
            <div class="row g-0 mb-2">
                <div class="col-sm-6 col-md-8">
                    <h4>{{ $title }}</h4>
                </div>
            </div>
            <div class="row g-0 gy-1">
                <div id="infografisgempa" class="col-lg-6">
                    @foreach ($infografis as $info)
                        <div class="col">
                            <div class="card">
                                <div class="row g-0">
                                    <div class="col">
                                        <div class="card-body">
                                            <h5 class="card-title"><a
                                                    href="/berita/{{ $info->slug }}">{{ $info->title }}</a>
                                            </h5>
                                            <p>
                                                <small class="text-muted">
                                                    {{ $info->created_at->diffForHumans() }}
                                                </small>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    <div class="container d-flex justify-content-center mt-5">
                        {{ $infografis->onEachSide(0)->links() }}
                    </div>
                    <hr>
                </div>
                <div id="sidecard-profil" class="col-lg-4 col-md-6 mt-3">
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
