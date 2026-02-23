@extends('main.index')

@section('css')
    @include('component.css')
    <link rel="stylesheet" href="{{ asset('css/style-wakasek.css') }}">
@endsection

@section('content')
    <div class="agenda-banner-page py-5" style="background-color: #0b5d34; padding-bottom: 100px !important;">
        <div class="container">
            <h2 class="fw-bold mb-0" style="font-size: 32px; color: white;">Wakasek Humas</h2>
        </div>
    </div>

    <div class="container mb-5">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="custom-card">
                    
                    {{-- Deskripsi Humas --}}
                    <div class="content-text">
                        {!! $data->deskripsi ?? 'Deskripsi belum diisi.' !!}
                    </div>

                    {{-- Bagian Mitra Industri (Dinamis) --}}
                    <h3 class="mitra-title">Mitra Industri :</h3>
                    <div class="mitra-grid">
                        @foreach($mitras as $mitra)
                            <div class="mitra-item">
                                <img src="{{ asset('storage/' . $mitra->logo) }}" alt="{{ $mitra->nama }}">
                            </div>
                        @endforeach
                    </div>

                    {{-- Staf Pengelola --}}
                    <div class="staf-section-title">
                        <i class="fas fa-user-tie"></i> Staf Pengelola
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="staf-wrapper">
                                <img src="{{ asset('storage/' . ($data->foto_wakasek ?? 'images/guru/default.png')) }}" alt="Wakasek" class="staf-img-circle">
                                <div>
                                    <p class="staf-label">WAKASEK HUMAS</p>
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