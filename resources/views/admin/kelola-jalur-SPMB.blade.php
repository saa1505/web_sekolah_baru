@extends('admin.index')

@section('content')
<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Kelola Pendaftaran Siswa Baru</h1>
    </div>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Daftar Calon Murid</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Lengkap</th>
                            <th>NISN/NIK</th>
                            <th>Program Keahlian</th>
                            <th>Sekolah Asal</th>
                            <th>Dokumen</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($pendaftar as $key => $item)
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td>{{ $item->nama_lengkap }}</td>
                            <td>{{ $item->nik }}</td>
                            <td>{{ $item->program_keahlian }}</td>
                            <td>{{ $item->sekolah_asal }}</td>
                            <td>
                                @if($item->pas_foto)
                                    <a href="{{ asset('storage/'.$item->pas_foto) }}" target="_blank" class="btn btn-sm btn-info">Foto</a>
                                @endif
                                @if($item->kk)
                                    <a href="{{ asset('storage/'.$item->kk) }}" target="_blank" class="btn btn-sm btn-info">KK</a>
                                @endif
                            </td>
                            <td>
                                <form action="{{ route('admin.pendaftaran.destroy', $item->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger btn-sm" onclick="return confirm('Yakin hapus data ini?')">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="7" class="text-center">Belum ada pendaftar baru.</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection