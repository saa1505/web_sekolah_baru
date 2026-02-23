@extends('admin.dashboard')

@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Tabel Teaching Factory (Kadwa Creative)</h3>
        <button class="btn btn-primary btn-sm float-right">Tambah Data</button>
    </div>
    <div class="card-body">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th style="width: 10px">NO</th>
                    <th>GAMBAR</th>
                    <th>JUDUL</th>
                    <th>DESKRIPSI</th>
                    <th style="width: 150px">AKSI</th>
                </tr>
            </thead>
            <tbody>
                @foreach($tefa as $key => $item)
                <tr>
                    <td>{{ $key + 1 }}</td>
                    <td><img src="{{ asset('storage/tefa/'.$item->foto) }}" width="100"></td>
                    <td>{{ $item->judul }}</td>
                    <td>{{ Str::limit($item->deskripsi, 100) }}</td>
                    <td>
                        <button class="btn btn-warning btn-sm">Edit</button>
                        <form action="{{ route('teaching-factory.destroy', $item->id) }}" method="POST" style="display:inline">
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