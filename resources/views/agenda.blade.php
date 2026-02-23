@extends('main.index')

@section('css')
    @include('component.css')
@endsection

@section('content')
    <div class="agenda-banner-page py-4" style="background-color: #0b5d34; color: #ffffff;">
        <div class="container">
            <h2 class="fw-bold mb-0" style="font-size: 28px; color: white;">Agenda</h2>
        </div>
    </div>

    <div class="container my-5">
        <div class="row g-4">
            <nav class="breadcrumb-container mt-2">
                <a href="{{ route('beranda') }}#bagian-agenda" class="breadcrumb-link">Agenda</a>
                <span class="breadcrumb-separator">/</span>
                <span class="breadcrumb-active">Agenda Detail</span>
            </nav>

            @foreach($agenda as $item)
            <div class="col-md-6 col-lg-4">
                <div class="card card-agenda h-100 border-0 shadow-sm">
                    <div class="card-body d-flex align-items-start p-4">
                        <div class="calendar-icon me-3">
                            <i class="fa-solid fa-calendar-check fa-2x"></i>
                        </div>
                        <div>
                            {{-- Panggil nama_kegiatan dari database --}}
                            <h6 class="fw-bold text-dark">{{ $item->nama_kegiatan }}</h6>
                            <hr class="my-2">
                            {{-- Panggil tanggal dari database --}}
                            <small class="text-muted">{{ $item->tanggal }}</small>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            {{-- SELESAI LOOPING --}}

        </div>
    </div>
@endsection