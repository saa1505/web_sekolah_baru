@extends('admin.index')

@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Tabel Visi & Misi</h3>
        <button class="btn btn-primary btn-sm float-right">Tambah Data</button>
    </div>
    <div class="card-body">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th style="width: 10px">NO</th>
                    <th>VISI</th>
                    <th>MISI</th>
                    <th style="width: 150px">AKSI</th>
                </tr>
            </thead>
            <tbody>
                @foreach($visimisi as $key => $item)
                <tr>
                    <td>{{ $key + 1 }}</td>
                    <td>{{ Str::limit($item->visi, 100) }}</td>
                    <td>{{ Str::limit($item->misi, 100) }}</td>
                    <td>
                        <a href="#" class="btn btn-warning btn-sm">✏️ Edit</a>
                        <form action="{{ route('visi-misi.destroy', $item->id) }}" method="POST" style="display:inline">
                            @csrf @method('DELETE')
                            <button class="btn btn-danger btn-sm">🗑️ Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection