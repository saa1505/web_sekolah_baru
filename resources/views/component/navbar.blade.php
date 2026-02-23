<div class="header-top">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-5">
                <div class="header-logo-section">
                    <img src="{{ asset('images/logo-smk.png') }}" alt="Logo"
                        style="width:110px; height:auto; margin-right:15px;">
                    <div class="logo-text">
                        <h2 class="title-main">SMK MUHAMMADIYAH 2</h2>
                        <p class="title-sub">KABUPATEN BANTUL - DIY</p>
                    </div>
                </div>
            </div>
            <div class="col-md-7 d-flex justify-content-end align-items-center">
                <div class="info-contact-wrapper">
                    <div class="contact-item">
                        <div class="icon-box"><i class="fa-solid fa-phone"></i></div>
                        <div><span>TELEPON</span><strong>089688448050</strong></div>
                    </div>
                    <div class="contact-item">
                        <div class="icon-box"><i class="fa-solid fa-envelope"></i></div>
                        <div><span>EMAIL</span><strong>smkmudaba02@gmail.com</strong></div>
                    </div>
                    <div class="social-box">
                        <a href="https://api.whatsapp.com/send/?phone=6288215225122&text&type=phone_number&app_absent=0"
                            class="wa" target="_blank">
                            <i class="fa-brands fa-whatsapp"></i>
                        </a>

                        <a href="https://www.tiktok.com/@smk_mudaba" class="tk" target="_blank">
                            <i class="fa-brands fa-tiktok"></i>
                        </a>

                        <a href="https://www.instagram.com/smk_mudaba" class="ig" target="_blank">
                            <i class="fa-brands fa-instagram"></i>
                        </a>

                        <a href="https://www.youtube.com/@smk_mudaba" class="yt" target="_blank">
                            <i class="fa-brands fa-youtube"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<nav class="navbar navbar-expand-lg navbar-light bg-white border-bottom py-3 sticky-top">
    <div class="container">
        <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
            <ul class="navbar-nav align-items-center">
                <li class="nav-item">
                    <a class="nav-link fw-bold" href="{{ route('beranda') }}">Beranda</a>
                </li>
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link mx-2 dropdown-toggle" id="dropdownMenuProfil"
                        data-bs-toggle="dropdown">Profil Kami</a>
                    <div class="dropdown-menu shadow-sm" aria-labelledby="dropdownMenuProfil">
                        <a class="dropdown-item" href="{{ route('profil-sekolah') }}">Profil Sekolah</a>
                        <a class="dropdown-item" href="{{ route('identitas-sekolah') }}">Identitas Sekolah</a>
                        <a class="dropdown-item" href="{{ route('visi-misi') }}">Visi & Misi</a>
                        <a class="dropdown-item" href="{{ route('sejarah-singkat') }}">Sejarah Singkat</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link mx-2 dropdown-toggle" id="dropdownMenuUnit"
                        data-bs-toggle="dropdown">Unit Kerja</a>
                    <div class="dropdown-menu shadow-sm" aria-labelledby="dropdownMenuUnit">
                        <a class="dropdown-item" href="{{ route('wakasek-kurikulum') }}">Wakasek Kurikulum</a>
                        <a class="dropdown-item" href="{{ route('wakasek-kesiswaan') }}">Wakasek Kesiswaan</a>
                        <a class="dropdown-item" href="{{ route('wakasek-humas') }}">Wakasek Humas</a>
                        <a class="dropdown-item" href="{{ route('wakasek-sarpras') }}">Wakasek sarpras</a>
                        <a class="dropdown-item" href="{{ route('wakasek-ismuba') }}">Wakasek ISMUBA</a>
                        <a class="dropdown-item" href="{{ route('Bursa-Kerja-Khusus') }}">Bursa Kerja Khusus</a>
                        <a class="dropdown-item" href="{{ route('Teaching-Factory') }}">Teaching Factory</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link fw-bold" href="{{ route('program-keahlian') }}">Program Keahlian</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mx-2 fw-bold" href="{{ route('agenda') }}">Agenda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fw-bold" href="{{ route('informasi') }}">Informasi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fw-bold" href="{{ route('kontak') }}">Kontak</a>
                </li>
            </ul>
        </div>
        <a href="{{ route('spmb-2026') }}" class="btn-spmb">SPMB 2026</a>
    </div>
</nav>
