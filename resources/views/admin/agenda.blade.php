@extends('admin.index')

@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Data Agenda Sekolah</h3>
        <button class="btn btn-primary btn-sm float-right">Tambah Agenda</button>
    </div>
    <div class="card-body">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th style="width: 10px">NO</th>
                    <th>NAMA KEGIATAN</th>
                    <th>TANGGAL</th>
                    <th style="width: 150px">AKSI</th>
                </tr>
            </thead>
            <tbody>
                @foreach($agenda as $key => $item)
                <tr>
                    <td>{{ $key + 1 }}</td>
                    <td>{{ $item->nama_kegiatan }}</td>
                    <td>{{ $item->tanggal }}</td>
                    <td>
                        <button class="btn btn-warning btn-sm">Edit</button>
                        <form action="{{ route('agenda.destroy', $item->id) }}" method="POST" style="display:inline">
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