@extends('layouts.main')
@section('container')
    <section id="profile-pegawai" class="head-profile">
        <div class="container-fluid head-struktur">
            <div class="row g-0 ">
                <div class="col-sm-6 col-md-8">
                    <h3>Profil Pegawai Stasiun Geofisika Balikpapan</h3>
                </div>
            </div>
            <div class="row g-0 gy-3">
                <div id="content-profil" class="col-lg-8 col-md-12 col-sm-12 tabel">
                    <div class="card mt-2 mb-1">
                        <div class="row g-0 mt-2">
                            <table class="table table-sm" style="max-width:630px">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Nama</th>
                                        <th scope="col"></th>
                                        <th scope="col"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($pegawai as $pegawai)
                                        <tr>
                                            <th scope="row">{{ $loop->iteration }}</th>
                                            <td>{{ $pegawai->name }}</td>
                                            <td class="text-muted">{{ $pegawai->role }}</td>
                                            <td class="text-muted">{{ $pegawai->pegawaicategory->name }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
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
