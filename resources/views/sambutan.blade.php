@extends('main.index')

@section('css')
    @include('component.css')
@endsection

@section('content')
    <div class="container content-section">
       <nav class="breadcrumb-container mt-4 mb-3">
            <a href="{{ route('beranda') }}#sambutan-kepsek" class="breadcrumb-link">Sambutan</a>
            <span class="breadcrumb-separator">/</span>
            <span class="breadcrumb-active">Sambutan Kepala Sekolah</span>
        </nav>
        <div class="banner-container">
            <img src="{{ asset('images/sambutan.jpeg') }}" class="banner-img" alt="Banner Sekolah">
            <div class="profile-photo">
                <img src="{{ asset('storage/' . $sambutan->foto_kepsek) }}" alt="Kepala Sekolah">
            </div>
        </div>

        <div class="text-body">
            <h2 class="fw-bold">Sambutan Kepala Sekolah</h2>
            <h5 class="fw-bold">{{ $sambutan->nama_kepsek }}</h5>
            <div class="divider-hijau"></div>

            <div class="isi-sambutan">
                <div class="main-text">
                    {!! $sambutan->isi_sambutan !!}
                </div>
            </div>
        </div>
    </div>
@endsection