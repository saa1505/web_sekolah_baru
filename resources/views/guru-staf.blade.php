@extends('main.index')

@section('css')
    @include('component.css')
@endsection

@section('content')
    <div class="agenda-banner-page py-4" style="background-color: #0b5d34; color: #ffffff;">
        <div class="container">
            <h2 class="fw-bold mb-0" style="font-size: 28px; color: white;">Guru & Staf</h2>
        </div>
    </div>
    <div class="container my-5">
        <div class="mb-5 text-left">
            <div class="dropdown">
                <button class="btn btn-filter dropdown-toggle" type="button" data-bs-toggle="dropdown">
                    <i class="fa-solid fa-sliders me-2"></i> Filter
                </button>
                <ul class="dropdown-menu shadow border-0">
                    <li><a class="dropdown-item" href="{{ route('guru-staf') }}">Semua Guru & Staf</a></li>
                    <li><a class="dropdown-item" href="{{ route('guru-staf', ['filter' => 'Bahasa Inggris']) }}">Bahasa
                            Inggris</a></li>
                    {{-- Tambahkan kategori lainnya sesuai kebutuhan --}}
                </ul>
            </div>
        </div>

        <div class="row">
            @forelse($gurus as $guru)
                <div class="col-6 col-md-4 col-lg-3 mb-4">
                    <div class="card-guru">
                        <div class="img-wrapper-guru">
                            {{-- Cek apakah ada foto, jika tidak pakai gambar default --}}
                            <img src="{{ $guru->foto ? asset('storage/' . $guru->foto) : asset('images/default-guru.png') }}"
                                alt="{{ $guru->nama }}">
                        </div>
                        <div class="guru-name">{{ $guru->nama }}</div>
                        <div class="guru-subject">{{ $guru->mapel }}</div>
                    </div>
                </div>
            @empty
                <div class="col-12 text-center">
                    <p>Data guru belum tersedia.</p>
                </div>
            @endforelse
        </div>
    </div>
@endsection