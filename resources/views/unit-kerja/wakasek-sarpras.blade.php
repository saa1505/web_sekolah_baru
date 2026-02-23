@extends('main.index')

@section('css')
    @include('component.css')
    <link rel="stylesheet" href="{{ asset('css/style-wakasek.css') }}">
@endsection

@section('content')
    {{-- Banner Hijau --}}
    <div class="agenda-banner-page py-5" style="background-color: #0b5d34; padding-bottom: 100px !important;">
        <div class="container">
            <h2 class="fw-bold mb-0" style="font-size: 32px; color: white;">Wakasek Sarpras</h2>
        </div>
    </div>

    {{-- Konten Utama --}}
    <div class="container mb-5">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="custom-card">
                    
                    {{-- Deskripsi Sarpras dari Backend --}}
                    <div class="content-text">
                        {!! $data->deskripsi ?? 'Deskripsi sarana dan prasarana belum diisi.' !!}
                    </div>

                    {{-- Bagian Staf Pengelola --}}
                    <div class="staf-section-title">
                        <i class="fas fa-user-friends"></i> Staf Pengelola
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="staf-wrapper">
                                {{-- Foto Wakasek dari Storage --}}
                                <img src="{{ asset('storage/' . ($data->foto_wakasek ?? 'images/guru/default.png')) }}" alt="Wakasek Sarpras" class="staf-img-circle">
                                <div>
                                    <p class="staf-label">WAKASEK SARPRAS</p>
                                    <h5 class="staf-nama">{{ $data->nama_wakasek ?? 'Nama Belum Diisi' }}</h5>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection