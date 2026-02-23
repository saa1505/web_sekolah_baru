@extends('admin.index')

@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Tabel Wakasek Humas</h3>
        <button class="btn btn-primary btn-sm float-right">Tambah Data</button>
    </div>
    <div class="card-body">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th style="width: 10px">NO</th>
                    <th>FOTO</th>
                    <th>NAMA</th>
                    <th>JABATAN</th>
                    <th style="width: 150px">AKSI</th>
                </tr>
            </thead>
            <tbody>
                @foreach($humas as $key => $item)
                <tr>
                    <td>{{ $key + 1 }}</td>
                    <td><img src="{{ asset('storage/humas/'.$item->foto) }}" width="80"></td>
                    <td>{{ $item->nama }}</td>
                    <td>{{ $item->jabatan }}</td>
                    <td>
                        <button class="btn btn-warning btn-sm">Edit</button>
                        <form action="{{ route('humas.destroy', $item->id) }}" method="POST" style="display:inline">
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