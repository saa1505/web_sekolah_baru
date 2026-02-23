<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <div class="sidebar-brand d-flex align-items-center justify-content-center">
        <div class="sidebar-brand-text mx-3" style="text-transform: none; font-size: 1.1rem; font-weight: 700;">
            Admin Panel
        </div>
    </div>

    <hr class="sidebar-divider my-0">

    <li class="nav-item active">
        <a class="nav-link" href="#">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <hr class="sidebar-divider">

    <div class="sidebar-heading">Informasi Utama</div>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseInfo">
            <i class="fas fa-fw fa-university"></i>
            <span>Info Sekolah</span>
        </a>
        <div id="collapseInfo" class="collapse" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="#">Profil Sekolah</a>
                <a class="nav-link" href="{{ route('admin.profil.sambutan.index') }}">
                    <i class="fas fa-user-tie me-2"></i>
                    Sambutan Kepala Sekolah
                </a>
                <a class="collapse-item" href="#">Identitas Sekolah</a>
                <a class="collapse-item" href="#">Visi & Misi</a>
                <a class="collapse-item" href="#">Sejarah Singkat</a>
            </div>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUnit">
            <i class="fas fa-fw fa-briefcase"></i>
            <span>Unit Kerja</span>
        </a>
        <div id="collapseUnit" class="collapse" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="#">Wakasek Kurikulum</a>
                <a class="collapse-item" href="#">Wakasek Kesiswaanm</a>
                <a class="collapse-item" href="#">Wakasek Humas</a>
                <a class="collapse-item" href="#">Wakasek Sarpras</a>
                <a class="collapse-item" href="#">Wakasek ISMUBA</a>
                <a class="collapse-item" href="#">Bursa Kerja Khusus</a>
                <a class="collapse-item" href="#">Teaching Factory</a>
                <a class="collapse-item" href="#">Guru & Staf</a>
            </div>
        </div>
    </li>

    <hr class="sidebar-divider">

    <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.jurusan.index') }}"><i class="fas fa-fw fa-graduation-cap"></i>
            <span>Program Keahlian</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="#"><i class="fas fa-fw fa-calendar"></i> <span>Agenda</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="#"><i class="fas fa-fw fa-newspaper"></i> <span>Informasi</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="#"><i class="fas fa-fw fa-phone"></i> <span>Kontak</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.jalur-pendaftaran.index') }}">
            <i class="fas fa-fw fa-clipboard-list"></i>
            <span>Kelola Jalur SPMB</span>
        </a>
    </li>

    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
