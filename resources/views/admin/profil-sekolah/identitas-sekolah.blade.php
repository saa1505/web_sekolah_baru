@extends('admin.index')

@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Tabel Identitas Sekolah</h3>
        <button class="btn btn-primary btn-sm float-right">Tambah Identitas</button>
    </div>
    <div class="card-body">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>NO</th>
                    <th>NAMA SEKOLAH</th>
                    <th>NPSN</th>
                    <th>ALAMAT</th>
                    <th>AKREDITASI</th>
                    <th>AKSI</th>
                </tr>
            </thead>
            <tbody>
                @foreach($identitas as $key => $item)
                <tr>
                    <td>{{ $key + 1 }}</td>
                    <td>{{ $item->nama_sekolah }}</td>
                    <td>{{ $item->npsn }}</td>
                    <td>{{ $item->alamat }}</td>
                    <td>{{ $item->status_akreditasi }}</td>
                    <td>
                        <a href="#" class="btn btn-warning btn-sm">✏️</a>
                        <form action="{{ route('identitas-sekolah.destroy', $item->id) }}" method="POST" style="display:inline">
                            @csrf @method('DELETE')
                            <button class="btn btn-danger btn-sm">🗑️</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection