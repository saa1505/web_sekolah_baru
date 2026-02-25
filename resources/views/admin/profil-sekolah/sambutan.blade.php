@extends('admin.index')

@section('content')

<div class="container-fluid">

    <div class="d-flex justify-content-between align-items-center mb-4">
        <h4>Data Sambutan Kepala Sekolah</h4>

        <a href="#" class="btn btn-primary">
            Tambah
        </a>
    </div>

    <div class="card shadow">
        <div class="card-body">

            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead class="table-light">
                        <tr>
                            <th width="5%">NO</th>
                            <th width="15%">FOTO</th>
                            <th width="15%">NAMA</th>
                            <th width="15%">JABATAN</th>
                            <th>SAMBUTAN</th>
                            <th width="20%">AKSI</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>
                                <img src="{{ asset('images/banner.jpg') }}"
                                     width="100"
                                     class="img-thumbnail">
                            </td>
                            <td>Insan Gunario, S.Pd.I, M.S.I</td>
                            <td>Kepala Sekolah</td>
                            <td>
                                Assalamu’alaikum warahmatullahi wabarakatuh...
                            </td>
                            <td>
                                <a href="/sambutan-kepala-sekolahc"
                                   target="_blank"
                                   class="btn btn-info btn-sm">
                                    Lihat
                                </a>

                                <a href="#" class="btn btn-warning btn-sm">
                                    Edit
                                </a>

                                <a href="#" class="btn btn-danger btn-sm">
                                    Hapus
                                </a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </div>
    </div>

</div>

@endsection
