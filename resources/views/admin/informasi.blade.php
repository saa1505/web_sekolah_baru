@extends('admin.dashboard')

@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Data Informasi & Berita Sekolah</h3>
        <button class="btn btn-primary btn-sm float-right">Tambah Informasi</button>
    </div>
    <div class="card-body">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th style="width: 10px">NO</th>
                    <th>GAMBAR</th>
                    <th>JUDUL</th>
                    <th>TANGGAL</th>
                    <th style="width: 150px">AKSI</th>
                </tr>
            </thead>
            <tbody>
                @foreach($informasi as $key => $item)
                <tr>
                    <td>{{ $key + 1 }}</td>
                    <td><img src="{{ asset('storage/informasi/'.$item->gambar) }}" width="100"></td>
                    <td>{{ $item->judul }}</td>
                    <td>{{ $item->tanggal_publish }}</td>
                    <td>
                        <button class="btn btn-warning btn-sm">Edit</button>
                        <form action="{{ route('informasi.destroy', $item->id) }}" method="POST" style="display:inline">
                            @csrf @method('DELETE')
                            <button class="btn btn-danger btn-sm">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection