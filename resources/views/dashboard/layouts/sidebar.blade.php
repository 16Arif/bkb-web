<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3">

        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}" aria-current="page" href="/dashboard">
                    <span data-feather="home"></span>
                    Dashboard
                </a>
            </li>
            <hr>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard/pegawai*') ? 'active' : '' }}" href="/dashboard/pegawai">
                    <span data-feather="users"></span>
                    Pegawai
                </a>
            </li>
            <hr>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard/berita*') ? 'active' : '' }}" href="/dashboard/berita">
                    <span data-feather="book-open"></span>
                    Berita
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard/buletin*') ? 'active' : '' }}" href="/dashboard/buletin">
                    <span data-feather="file-text"></span>
                    Buletin
                </a>
            </li>
            <li class="nav-item bd-aside mx-2">
                <button class="btn d-inline-flex align-items-center collapsed" data-bs-toggle="collapse"
                    aria-expanded="false" data-bs-target="#contents-collapse" aria-controls="contents-collapse"><small
                        class="px-1">
                        Infografis</small></button>
                <ul class="nav ps-3 collapse mt-2" id="contents-collapse">
                    <li class="mb-2"><a class="d-inline-flex align-items-center"
                            href="/dashboard/infografisgempa">Infografis
                            Gempabumi</a>
                    </li>
                    <li class="mb-2"><a class="d-inline-flex align-items-center"
                            href="/dashboard/infografispetir">Infografis Petir</a>
                    </li>
                    <li><a class="d-inline-flex align-items-center" href="/dashboard/infografisttm">Infografis
                            Terbit Terbenam
                            Matahari</a></li>
                </ul>
            </li>
        </ul>



    </div>
</nav>
