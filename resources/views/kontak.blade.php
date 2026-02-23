@extends('main.index')

@section('css')
    @include('component.css')
@endsection

@section('content')
    <div class="position-relative overflow-hidden" style="height: 350px;">
        <img src="{{ asset('images/logo.jpeg') }}" class="w-100 h-100" style="object-fit: cover; filter: brightness(0.6);"
            alt="Banner SMK Mudaba">
        <div class="position-absolute top-50 start-50 translate-middle text-center text-white w-100 px-3">
            <h1 class="fw-bold text-uppercase" style="letter-spacing: 2px;">Kontak Kami</h1>
            <p class="lead d-none d-md-block">Silahkan hubungi kami melalui saluran informasi di bawah ini</p>
        </div>
    </div>

    <div class="container my-5">
        <div class="row g-4">
            <div class="col-lg-5">
                <div class="card border-0 shadow-sm h-100 p-4" style="border-radius: 15px;">
                    <h4 class="fw-bold mb-4" style="color: #2c3e50; border-left: 4px solid #0d6efd; padding-left: 15px;">
                        Informasi Sekolah</h4>

                    {{-- Alamat --}}
                    <div class="d-flex mb-4">
                        <div class="text-primary me-3"><i class="fas fa-map-marker-alt fa-lg"></i></div>
                        <div>
                            <h6 class="fw-bold mb-1">Alamat</h6>
                            <p class="text-muted small mb-0">{{ $kontak->alamat ?? 'Jl. Bejen, Karangbayam, Bantul' }}</p>
                        </div>
                    </div>

                    {{-- Telepon --}}
                    <div class="d-flex mb-4">
                        <div class="text-primary me-3"><i class="fas fa-phone-alt fa-lg"></i></div>
                        <div>
                            <h6 class="fw-bold mb-1">Telepon</h6>
                            {{-- Ganti baris 38 yang merah itu jadi seperti ini --}}
                            <a href="tel:{{ $kontak->telepon ?? '' }}" class="text-decoration-none text-muted small">
                                {{ $kontak->telepon ?? 'Nomor belum diisi' }}
                            </a>
                        </div>
                    </div>

                    {{-- WhatsApp --}}
                    <div class="d-flex mb-4">
                        <div class="text-success me-3"><i class="fab fa-whatsapp fa-lg"></i></div>
                        <div>
                            <h6 class="fw-bold mb-1">WhatsApp</h6>
                            <a href="https://wa.me/{{ preg_replace('/[^0-9]/', '', $kontak->whatsapp ?? '') }}"
                                target="_blank"
                                class="text-decoration-none text-muted small">{{ $kontak->whatsapp ?? '-' }}</a>
                        </div>
                    </div>

                    {{-- Email --}}
                    <div class="d-flex mb-2">
                        <div class="text-danger me-3"><i class="fas fa-envelope fa-lg"></i></div>
                        <div>
                            <h6 class="fw-bold mb-1">Email Resmi</h6>
                            <a href="mailto:{{ $kontak?->email ?? '' }}" class="text-decoration-none text-muted small">
                                {{ $kontak?->email ?? 'Belum ada data' }}
                            </a>
                        </div>
                    </div>

                    <hr>

                    <h6 class="fw-bold mb-3">Media Sosial & Web</h6>
                    <div class="d-flex flex-wrap gap-2">
                        <a href="{{ $kontak->instagram ?? '#' }}" target="_blank"
                            class="btn btn-sm btn-outline-primary rounded-pill px-3">
                            <i class="fab fa-instagram me-1"></i> Instagram
                        </a>
                        <a href="{{ $kontak->youtube ?? '#' }}" target="_blank"
                            class="btn btn-sm btn-outline-danger rounded-pill px-3">
                            <i class="fab fa-youtube me-1"></i> YouTube
                        </a>
                        <a href="{{ $kontak->website ?? '#' }}" target="_blank"
                            class="btn btn-sm btn-outline-info rounded-pill px-3">
                            <i class="fas fa-globe me-1"></i> Website Resmi
                        </a>
                    </div>
                </div>
            </div>

            {{-- Maps Dinamis --}}
            <div class="col-lg-7">
                <div class="card border-0 shadow-sm overflow-hidden h-100" style="border-radius: 15px; min-height: 400px;">
                    @if ($kontak && $kontak->maps)
                        {!! $kontak->maps !!}
                    @else
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3952.123456789!2d110.33!3d-7.89!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zN8KwNTMnNDIuMCJTIDExMMKwMTknNDguMCJF!5e0!3m2!1sid!2sid!4v123456789"
                            width="100%" height="100%" style="border:0; min-height: 450px;" allowfullscreen=""
                            loading="lazy">
                        </iframe>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection