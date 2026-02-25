<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <div class="sidebar-brand d-flex align-items-center justify-content-center">
        <div class="sidebar-brand-text mx-3" style="text-transform: none; font-size: 1.1rem; font-weight: 700;">
            Admin Panel
        </div>
    </div>

    <hr class="sidebar-divider my-0">

    <li class="nav-item {{ request()->is('admin/dashboard') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('admin.dashboard') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <hr class="sidebar-divider">

    <div class="sidebar-heading">Informasi Utama</div>

    <li class="nav-item {{ request()->is('admin/info-*') ? 'active' : '' }}">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseInfo">
            <i class="fas fa-fw fa-university"></i>
            <span>Info Sekolah</span>
        </a>
        <div id="collapseInfo" class="collapse {{ request()->is('admin/info-*') ? 'show' : '' }}" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{ Route::has('admin.profil-sekolah.index') ? route('admin.profil-sekolah.index') : '#' }}">Profil Sekolah</a>
                <a class="collapse-item" href="{{ route('admin.profil.sambutan.index') }}">Sambutan Kepala Sekolah</a>
                <a class="collapse-item" href="{{ route('identitas-sekolah.index') }}">Identitas Sekolah</a>
                <a class="collapse-item" href="{{ route('visi-misi.index') }}">Visi & Misi</a>
                <a class="collapse-item" href="{{ route('sejarah-singkat.index') }}">Sejarah Singkat</a>
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
                <a class="collapse-item" href="{{ route('kurikulum.index') }}">Wakasek Kurikulum</a>
                <a class="collapse-item" href="{{ route('kesiswaan.index') }}">Wakasek Kesiswaan</a>
                <a class="collapse-item" href="{{ route('humas.index') }}">Wakasek Humas</a>
                <a class="collapse-item" href="{{ route('sarpras.index') }}">Wakasek Sarpras</a>
                <a class="collapse-item" href="{{ route('ismuba.index') }}">Wakasek ISMUBA</a>
                <a class="collapse-item" href="{{ route('bkk.index') }}">Bursa Kerja Khusus</a>
                <a class="collapse-item" href="{{ route('tefa.index') }}">Teaching Factory</a>
                <a class="collapse-item" href="{{ route('admin.guru.index') }}">Guru & Staf</a>
            </div>
        </div>
    </li>

    <hr class="sidebar-divider">

    <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.jurusan.index') }}">
            <i class="fas fa-fw fa-graduation-cap"></i>
            <span>Program Keahlian</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('agenda.index') }}">
            <i class="fas fa-fw fa-calendar"></i> 
            <span>Agenda</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('informasi.index') }}">
            <i class="fas fa-fw fa-newspaper"></i> 
            <span>Informasi</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('kontak.index') }}">
            <i class="fas fa-fw fa-phone"></i> 
            <span>Kontak</span>
        </a>
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