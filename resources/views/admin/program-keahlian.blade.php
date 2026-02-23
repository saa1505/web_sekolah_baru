@extends('admin.index')

@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Data Program Keahlian</h3>
        <button class="btn btn-primary btn-sm float-right">Tambah Jurusan</button>
    </div>
    <div class="card-body">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th style="width: 10px">NO</th>
                    <th>GAMBAR</th>
                    <th>NAMA JURUSAN</th>
                    <th>SINGKATAN</th>
                    <th style="width: 150px">AKSI</th>
                </tr>
            </thead>
            <tbody>
                @forelse($jurusan as $key => $item)
                <tr>
                    <td>{{ $key + 1 }}</td>
                    <td><img src="{{ asset('storage/jurusan/'.$item->gambar) }}" width="100"></td>
                    <td>{{ $item->nama_jurusan }}</td>
                    <td>{{ $item->singkatan }}</td>
                    <td>
                        <button class="btn btn-warning btn-sm">Edit</button>
                        <button class="btn btn-danger btn-sm">Hapus</button>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="5" class="text-center">Data Jurusan masih kosong.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection