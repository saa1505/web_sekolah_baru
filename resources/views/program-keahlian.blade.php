@extends('main.index')

@section('css')
    @include('component.css')
@endsection

@section('content')
    <div class="agenda-banner-page py-4" style="background-color: #0b5d34; color: #ffffff;">
        <div class="container">
            <h2 class="fw-bold mb-0" style="font-size: 28px; color: white;">Program Keahlian</h2>
        </div>
    </div>

    <div class="container py-5">
        <div class="row g-4">
            {{-- Loop data dari database --}}
            @foreach($programs as $p)
            <div class="col-md-6">
                <div class="card-program">
                    <span class="badge-smk">SMK</span>
                    <div class="img-container">
                        {{-- Ambil gambar dari storage hasil upload admin --}}
                        <img src="{{ asset('storage/' . $p->gambar) }}" alt="{{ $p->nama_jurusan }}">
                    </div>
                    <div class="program-overlay">
                        {{-- Nama jurusan dari kolom 'nama_jurusan' --}}
                        <h5>{{ $p->nama_jurusan }}</h5>
                    </div>
                </div>
            </div>
            @endforeach

            {{-- Tampilkan pesan jika data kosong --}}
            @if($programs->isEmpty())
                <div class="col-12 text-center">
                    <p class="text-muted">Data program keahlian belum diisi.</p>
                </div>
            @endif
        </div>
    </div>
@endsection