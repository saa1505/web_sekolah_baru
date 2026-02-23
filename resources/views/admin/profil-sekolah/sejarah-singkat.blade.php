@extends('admin.index')

@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Tabel Sejarah Singkat</h3>
        <button class="btn btn-primary btn-sm float-right">Tambah Sejarah</button>
    </div>
    <div class="card-body">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>NO</th>
                    <th>TAHUN/PERIODE</th>
                    <th>ISI SEJARAH</th>
                    <th>AKSI</th>
                </tr>
            </thead>
            <tbody>
                @foreach($sejarah as $key => $item)
                <tr>
                    <td>{{ $key + 1 }}</td>
                    <td>{{ $item->tahun }}</td>
                    <td>{{ Str::limit($item->konten, 100) }}</td>
                    <td>
                        <button class="btn btn-warning btn-sm">✏️</button>
                        <form action="{{ route('sejarah-singkat.destroy', $item->id) }}" method="POST" style="display:inline">
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