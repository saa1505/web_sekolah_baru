@extends('admin.index')

@section('content')
<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Tabel Profil Sekolah</h3>
            {{-- Tombol tambah ini nanti kita arahkan ke form create --}}
            <button class="btn btn-primary btn-sm float-right">Tambah Data</button>
        </div>
        <div class="card-body">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th style="width: 10px">NO</th>
                        <th>GAMBAR</th>
                        <th>JUDUL</th>
                        <th>DESKRIPSI</th>
                        <th style="width: 100px">AKSI</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($profil as $key => $item)
                    <tr>
                        <td>{{ $key + 1 }}</td>
                        <td>
                            <img src="{{ asset('storage/profil/' . $item->gambar) }}" width="80">
                        </td>
                        <td>{{ $item->judul }}</td>
                        {{-- Membatasi teks deskripsi agar tabel tidak berantakan --}}
                        <td>{{ Str::limit($item->deskripsi, 100) }}</td>
                        <td>
                            {{-- Ikon Edit Kuning & Hapus Merah sesuai gambar 2 --}}
                            <a href="#" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
                            
                            <form action="{{ route('profil-sekolah.destroy', $item->id) }}" method="POST" style="display:inline;">
                                @csrf @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin hapus?')">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection