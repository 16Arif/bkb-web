@extends('layouts.main')

@section('container')
    <section id="profile-pegawai" class="head-profile">
        <div class="container-fluid head-struktur">
            <div class="row g-0 mb-3">
                <div class="col-sm-6 col-md-8">
                    <h4>Visi Misi</h4>
                </div>
            </div>
            <div class="row g-0 gy-3">
                <div id="content-profil" class="col-sm-6 col-lg-8">
                    <article>
                        <h5>Visi dan Misi</h5>
                        <p>
                            Dalam rangka mendukung dan mengemban tugas pokok dan fungsi serta memperhatikan kewenangan BMKG
                            agar lebih efektif dan efisien, maka diperlukan aparatur yang profesional, bertanggung jawab dan
                            berwibawa serta bebas dari Korupsi, Kolusi, dan Nepotisme (KKN), disamping itu harus dapat
                            menjunjung tinggi kedisiplinan, kejujuran dan kebenaran guna ikut serta memberikan pelayanan
                            informasi yang cepat, tepat dan akurat. Oleh karena itu kebijakan yang akan dilakukan BMKG Tahun
                            2010-2014 adalah mengacu pada Visi, Misi, dan Tujuan BMKG yang telah ditetapkan.
                        </p>
                        <h5>Visi</h5>
                        <p>Mewujudkan BMKG yang handal, tanggap dan mampu dalam rangka mendukung keselamatan masyarakat
                            serta keberhasilan pembangunan nasional, dan berperan aktif di tingkat Internasional.
                            Terminologi di dalam visi tersebut dapat dijelaskan sebagai berikut :</p>
                        <ol>
                            <li>
                                <p>Pelayanan informasi meteorologi, klimatologi, kualitas udara, dan geofisika yang handal
                                    ialah pelayanan BMKG terhadap penyajian data, informasi pelayanan jasa meteorologi,
                                    klimatologi, kualitas udara, dan geofisika yang akurat, tepat sasaran, tepat guna,
                                    cepat, lengkap, dan dapat dipertanggungjawabkan</p>
                            </li>
                            <li>
                                <p>Tanggap dan mampu dimaksudkan BMKG dapat menangkap dan merumuskan kebutuhan stakeholder
                                    akan data, informasi, dan jasa meteorologi, klimatologi, kualitas udara, dan geofisika
                                    serta mampu memberikan pelayanan sesuai dengan kebutuhan pengguna jasa;</p>
                            </li>
                        </ol>
                        <h5>Misi</h5>
                        <p>Dalam rangka mewujudkan Visi BMKG, maka diperlukan visi yang jelas yaitu berupa langkah-langkah
                            BMKG untuk mewujudkan Misi yang telah ditetapkan yaitu :</p>
                        <ol>
                            <li>
                                <p>Mengamati dan memahami fenomena meteorologi, klimatologi, kualitas udara dan geofisika.
                                </p>
                            </li>
                            <li>
                                <p>Menyediakan data, informasi dan jasa meteorologi, klimatologi, kualitas udara dan
                                    geofisika yang handal dan terpercaya.</p>
                            </li>
                            <li>
                                <p>Mengkoordinasikan dan memfasilitasi kegiatan di bidang meteorologi, klimatologi ,
                                    kualitas udara dan geofisika.</p>
                            </li>
                            <li>
                                <p>Berpartisipasi aktif dalam kegiatan internasional di Bidang meteorologi, klimatologi ,
                                    kualitas udara dan geofisika.</p>
                            </li>
                        </ol>
                        <p>Secara lebih rinci, maksud dari pernyataan misi di atas adalah sebagai berikut :</p>
                        <ol>
                            <li>Mengamati dan memahami fenomena meteorologi, klimatologi, kualitas udara, dan geofisika
                                artinya BMKG melaksanakan operasional pengamatan dan pengumpulan data secara teratur,
                                lengkap dan akurat guna dipakai untuk mengenali dan memahami karakteristik unsur-unsur
                                meteorologi, klimatologi, kualitas udara, dan geofisika guna membuat prakiraan dan informasi
                                yang akurat;</li>
                            <li>Menyediakan data, informasi dan jasa meteorologi, klimatologi, kualitas udara, dan geofisika
                                kepada para pengguna sesuai dengan kebutuhan dan keinginan mereka dengan tingkat akurasi
                                tinggi dan tepat waktu;
                            </li>
                            <li>
                                Mengkoordinasi dan Memfasilitasi kegiatan sesuai dengan kewenangan BMKG, maka BMKG wajib
                                mengawasi pelaksanaan operasional, memberi pedoman teknis, serta berwenang untuk
                                mengkalibrasi peralatan meteorologi, klimatologi, kualitas udara, dan geofisika sesuai
                                dengan peraturan yang berlaku
                            </li>
                            <li>
                                Berpartisipasi aktif dalam kegiatan internasional artinya BMKG dalam melaksanakan kegiatan
                                secara operasional selalu mengacu pada ketentuan internasional mengingat bahwa fenomena
                                meteorologi, klimatologi, kualitas udara, dan geofisika tidak terbatas dan tidak terkait
                                pada batas batas wilayah suatu negara manapun.
                            </li>
                        </ol>
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
