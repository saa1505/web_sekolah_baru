@extends('admin.index')

@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Informasi Kontak Sekolah</h3>
        @if(!$kontak)
        <button class="btn btn-primary btn-sm float-right">Tambah Kontak</button>
        @endif
    </div>
    <div class="card-body">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ALAMAT</th>
                    <th>TELEPON / WA</th>
                    <th>EMAIL</th>
                    <th>AKSI</th>
                </tr>
            </thead>
            <tbody>
                @if($kontak)
                <tr>
                    <td>{{ $kontak->alamat }}</td>
                    <td>{{ $kontak->telepon }} / {{ $kontak->whatsapp }}</td>
                    <td>{{ $kontak->email }}</td>
                    <td>
                        <button class="btn btn-warning btn-sm">Edit</button>
                    </td>
                </tr>
                @else
                <tr>
                    <td colspan="4" class="text-center">Data kontak belum diisi.</td>
                </tr>
                @endif
            </tbody>
        </table>
    </div>
</div>
@endsection