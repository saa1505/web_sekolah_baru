@extends('admin.index') 

@section('content')
<div class="container-fluid">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2>Daftar Guru & Staf</h2>
        <a href="{{ route('admin.guru.create') }}" class="btn btn-primary">+ Tambah Guru</a>
    </div>

    <div class="card shadow">
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th>Foto</th>
                        <th>Nama</th>
                        <th>Mapel/Jabatan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($gurus as $guru)
                    <tr>
                        <td>
                            <img src="{{ asset('storage/' . $guru->foto) }}" width="50" class="rounded">
                        </td>
                        <td>{{ $guru->nama }}</td>
                        <td>{{ $guru->mapel }}</td>
                        <td>
                            <form action="{{ route('admin.guru.destroy', $guru->id) }}" method="POST">
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
</div>
@endsection