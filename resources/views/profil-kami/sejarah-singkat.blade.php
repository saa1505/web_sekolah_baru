@extends('main.index')

{{-- Bagian CSS tetap sama seperti kode lo --}}
@section('css')
    @include('component.css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
@endsection

@section('content')
    <div class="container sejarah-container my-5">
        <h2 class="sejarah-title">Sejarah Singkat</h2>

        <div class="timeline">
            {{-- Jika lo menyimpan konten sejarah dalam satu kolom 'konten' di database --}}
            <div class="timeline-content-full">
                {!! $sejarah->konten ?? '<p class="text-center">Data sejarah belum diisi.</p>' !!}
            </div>
        </div>

        <div class="kepemimpinan-section">
            <h4 class="kepemimpinan-title">
                <i class="fas fa-users-cog"></i> Tongkat Kepemimpinan
            </h4>
            
            <div class="kepemimpinan-content">
                {{-- Ambil data kepemimpinan dari kolom 'kepemimpinan' di database --}}
                {!! $sejarah->kepemimpinan ?? '<p>Data kepemimpinan belum diisi.</p>' !!}
            </div>
        </div>
    </div>
@endsection