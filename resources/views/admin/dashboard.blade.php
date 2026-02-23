@extends('admin.index')

@section('content')
<div class="container-fluid">
    <div class="alert alert-dark shadow-sm border-0 mb-4" role="alert" style="background-color: #309a95d2; color: rgb(255, 255, 255);">
        <h4 class="alert-heading fw-bold">Dashboard!</h4>
        <p class="mb-0">Selamat Datang Di Admin Panel <strong>Devsa</strong></p>
    </div>

    <div class="row mb-4">
        <div class="col-xl-3 col-md-6 mb-0">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                Status Sistem</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">Fitur Admin Aktif</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-check-circle fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6 mb-0">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Total Berita</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">24 Postingan</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-newspaper fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6 mb-0">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                Total Agenda</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">12 Agenda</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6 mb-0">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                Total Guru-Staf</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">48 Foto</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-images fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Jumlah Kunjungan Berita</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" width="100%" cellspacing="0">
                    <thead class="bg-light">
                        <tr>
                            <th>Judul Berita</th>
                            <th>Kategori</th>
                            <th>Jumlah Kunjungan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Kegiatan PKL SMK Mudaba 2026</td>
                            <td>Informasi</td>
                            <td><span class="badge badge-primary">1.250 kali</span> oleh pengunjung</td>
                        </tr>
                        <tr>
                            <td>Workshop Industri Maspion IT</td>
                            <td>Berita</td>
                            <td><span class="badge badge-primary">850 kali</span> oleh pengunjung</td>
                        </tr>
                        <tr>
                            <td>Agenda Rapat Kurikulum Semester Genap</td>
                            <td>Agenda</td>
                            <td><span class="badge badge-primary">420 kali</span> oleh pengunjung</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
@endsection