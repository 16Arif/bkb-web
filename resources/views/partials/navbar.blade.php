<nav id="top-nav" class="navbar navbar-expand-md navbar-dark">
    <div class="container">
        <div class="lg-px-2 mt-3">
            <p class="text-light justify-conten-center">Minggu, 13 November 2022</p>
        </div>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
            aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse mt-2" id="navbarCollapse">
            <ul class="navbar-nav ms-auto mt-3">
                <li class="nav-item ">
                    <p class="text-light">Waktu Balikpapan<span id="jam" class="jam px-2"></span>WITA</p>
                </li>
            </ul>
        </div>
    </div>
</nav>
<nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top w-100 my-auto">
    <div class="container">
        <a class="navbar-brand" id="upt" href="/">
            <img src="{{ asset('img/bmkg-brand.png') }}" alt="bmkg-brand" width="40" class="me-2">
            Stasiun Gefosika Balikpapan</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse " id="navbarNavDropdown">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item mx-1 ">
                    <a class="nav-link" aria-current="page" href="/">Beranda</a>
                </li>
                <li class="nav-item mx-1  dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false" style="text-decoration: none">
                        Profil
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item" href="/staf">Profil Pegawai</a></li>
                        <li><a class="dropdown-item" href="/profil-stasiun">Profil Stasiun</a></li>
                        <li><a class="dropdown-item" href="/struktur-organisasi">Struktur Organisasi</a></li>
                        <li><a class="dropdown-item" href="/visimisi">Visi Misi</a></li>
                    </ul>
                </li>
                <li class="nav-item mx-1 dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Informasi Geofisika
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item"
                                href="https://www.bmkg.go.id/gempabumi/gempabumi-terkini.bmkg">Gempabumi Terkini</a>
                        </li>
                        <li><a class="dropdown-item" href="/mitigasigempa">Mitigasi Gempabumi</a></li>
                    </ul>
                </li>
                <li class="nav-item  mx-1 dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Publikasi
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item" href="/berita">Berita</a></li>
                        <li><a class="dropdown-item" href="/buletin">Buletin</a></li>
                        <li><a class="dropdown-item" href="/infografis">Infografis</a></li>
                    </ul>
                </li>
                <li class="nav-item mx-1 ">
                    <a class="nav-link" aria-current="page" href="/datarequest">Pelayanan</a>
                </li>
                @auth
                    <div class="info-login">
                        <ul class="navbar-nav ms-auto mt-2">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    Selamat Datang, {{ auth()->user()->name }}
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="/dashboard"><i
                                                class="fa-solid fa-table-columns"></i>
                                            Dashboard</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <form action="/logout" method="post">
                                        @csrf
                                        <button type="submit" class="dropdown-item"><i
                                                class="fa-solid fa-right-from-bracket"></i> Keluar</button>
                                    </form>
                                </ul>
                            </li>
                        </ul>
                    </div>
                @endauth
                {{-- <li class="nav-item mx-1  dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Pelayanan
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item" href="/data-gempa">Permintaan Data Gempabumi</a></li>
                        <li><a class="dropdown-item" href="/data-petir">Data Kejadian Petir</a></li>
                    </ul>
                </li> --}}
            </ul>
        </div>
    </div>
</nav>
