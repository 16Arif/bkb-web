@extends('layouts.main')

@section('container')
    <section id="profile-pegawai" class="head-profile">
        <div class="container-fluid head-struktur">
            <div class="row g-0 mb-3">
                <div class="col-sm-6 col-md-8">
                    <h3>Profil Stasiun Geofisika Balikpapan</h1>
                </div>
            </div>
            <div class="row g-0 gy-3">
                <div id="content-profil" class="col-sm-6 col-lg-6">
                    <article>
                        <img src="img/hero.jpeg" alt="upt-old" class="img-fluid upt-old mb-3">
                        <p class="text-break">
                            Stasiun Geofisika Balikpapan didirikan pada tahun 1975 yang berlokasi di Jl. Marsma R. Iswahyudi
                            No. 354, Kelurahan Sepinggan Raya, Kota Balikpapan Provinsi Kalimantan Timur bersebelahan dengan
                            Kantor Administrasi Stasiun Meteorologi Balikpapan. Pada tahun 2008 dibangun Kantor Operasional
                            yang berlokasi di Jl. Prona III RT. 017, No. 35, Sepinggan, Balikpapan, sehingga Kantor yang
                            lama menjadi Kantor Administrasi (Tata Usaha).
                        </p>
                        <p class="text-break">
                            Pada saat ini, Stasiun Geofisika Balikpapan adalah Unit Pelaksana Teknis Badan Meteorologi
                            Klimatologi dan Geofisika telah beroperasi sejak tahun 1975 dan merupakan Stasiun Kelas III yang
                            memiliki jam operasional Pengamatan, Pengolahan dan Analisa Stasiun 24 jam penuh selama 7 hari.
                        </p>
                        <p class="text-break">
                            Kegiatan yang dilakukan oleh Stasiun Geofisika Balikpapan antara lain :
                        </p>
                        <ul>
                            <li>a. Observasi, pengolahan, analisa dan pelayanan data geofisika, yaitu Gempabumi dan Listrik
                                Udara (LD).</li>
                            <li>b. Observasi permukaan darat Meteorologi yaitu Menakar hujan.</li>
                            <li>c. Observasi langsung atau visual kejadian-kejadian ekstrim yang berhubungan dengan
                                Geofisika.</li>
                            <li>d. Melaksanakan kegiatan lainnya yang berhubungan dengan Geofisika</li>
                            <li>e. Melaksanakan pelayanan data petir.</li>
                        </ul>
                    </article>
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
