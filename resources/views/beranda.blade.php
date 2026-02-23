@extends('main.index')

@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    @include('component.css')
@endsection

@section('content')
    {{-- Section Hero --}}
    <section class="hero-section">
        <video autoplay muted loop playsinline class="video-bg">
            <source src="{{ asset('videos/video.mp4') }}" type="video/mp4">
        </video>
        <div class="container text-left hero-content">
            <h1>Selamat Datang di <br>SMK Muhammadiyah 2 Bantul</h1>
            <p>Mari mengenal lebih dekat sekolah kami dan bergabung bersama kami.</p>
        </div>
    </section>

    {{-- Section Sambutan & Statistik --}}
    <div class="container" id="sambutan-kepsek">
        <div class="welcome-card">
            <div class="row align-items-center">
                {{-- CEK APAKAH DATA SAMBUTAN ADA DI DATABASE --}}
                @if ($sambutan)
                    <div class="col-md-7 border-right">
                        <div class="d-flex align-items-start">
                            {{-- Foto Kepsek Dinamis --}}
                            <img src="{{ asset('storage/sambutan/' . $sambutan->foto) }}" class="headmaster-img mr-4"
                                alt="Kepala Sekolah">

                            <div>
                                <h4 style="font-weight:900; color:#333;">Sambutan Kepala Sekolah</h4>
                                {{-- Nama Kepsek Dinamis --}}
                                <p style="font-weight:700; color:#333935; margin-bottom:5px;">
                                    {{ $sambutan->nama_kepsek }}
                                </p>
                                {{-- Isi Sambutan Dinamis (Dibatasi 250 karakter agar tidak kepanjangan) --}}
                                <p style="font-size:14px; color:#666; line-height:1.6;">
                                    {!! Str::limit($sambutan->isi, 250) !!}
                                </p>
                                <a href="{{ route('sambutan') }}" style="color:#0b5d34; font-weight:700; font-size:14px;">
                                    Selengkapnya <i class="fa fa-chevron-right ml-1"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                @else
                    {{-- Tampilan jika data di database masih kosong --}}
                    <div class="col-md-7 border-right">
                        <p class="text-muted">Data sambutan belum diisi di Admin Panel.</p>
                    </div>
                @endif

                {{-- Bagian Statistik --}}
                <div class="col-md-5">
                    <h5 class="stats-title">Statistik Data Alumni</h5>
                    <div class="row">
                        <div class="col-4 stat-box">
                            <span class="stat-number">41</span>
                            <span class="stat-label">Bekerja</span>
                        </div>
                        <div class="col-4 stat-box">
                            <span class="stat-number">0</span>
                            <span class="stat-label">Studi Lanjut</span>
                        </div>
                        <div class="col-4 stat-box">
                            <span class="stat-number">32</span>
                            <span class="stat-label">Wirausaha</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section id="bagian-agenda" class="py-5" style="background-color: #ffffff;">
        <div class="container">
            <div class="d-flex justify-content-between align-items-end mb-4">
                <div>
                    <h2 class="fw-bold mb-1" style="color: #333;">Agenda</h2>
                    <p class="text-muted mb-0">Agenda kegiatan dan aktifitas sesuai dengan kalender pendidikan</p>
                </div>
                <a href="{{ route('agenda') }}" class="text-success fw-bold text-decoration-none" style="font-size: 14px;">
                    Selengkapnya <i class="fas fa-chevron-right ms-1"></i>
                </a>
            </div>

            <div class="row g-4">
                @foreach ($agenda as $item)
                    <div class="col-md-4">
                        <div class="card h-100 border-0 shadow-sm"
                            style="border-bottom: 3px solid #0b5d34; border-radius: 8px;">
                            <div class="card-body p-4">
                                <div class="mb-3">
                                    <i class="fas fa-calendar-check fa-2x" style="color: #0b5d34;"></i>
                                </div>
                                <h6 class="fw-bold text-dark mb-3" style="line-height: 1.5; min-height: 48px;">
                                    {{ $item->nama_kegiatan }}
                                </h6>
                                <hr class="my-3" style="opacity: 0.1;">
                                <div class="text-muted" style="font-size: 13px;">
                                    {{ $item->tanggal }}
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section id="bagian-berita" class="py-5" style="background-color: #ffffff;">
        <div class="container">
            <div class="d-flex justify-content-between align-items-end mb-4">
                <div>
                    <h2 class="fw-bold mb-1" style="color: #333;">Berita, Artikel & Informasi</h2>
                    <p class="text-muted mb-0">Berita, artikel & informasi sekolah kami</p>
                </div>
                <a href="{{ route('informasi') }}" class="text-success fw-bold text-decoration-none"
                    style="font-size: 14px;">
                    Selengkapnya <i class="fas fa-chevron-right ms-1"></i>
                </a>
            </div>

            <div class="row g-4">
                @foreach ($informasi as $item)
                    <div class="col-md-4">
                        <div class="card h-100 border-0 shadow-sm" style="border-radius: 12px; overflow: hidden;">
                            <div style="height: 200px; overflow: hidden;">
                                <img src="{{ asset('storage/informasi/' . $item->gambar) }}"
                                    class="card-img-top w-100 h-100" style="object-fit: cover;" alt="{{ $item->judul }}">
                            </div>

                            <div class="card-body p-4">
                                <p class="text-muted mb-2" style="font-size: 13px;">
                                    {{ \Carbon\Carbon::parse($item->tanggal_publish)->format('d F Y') }}
                                </p>

                                <h5 class="card-title fw-bold" style="font-size: 16px; line-height: 1.6; color: #333;">
                                    {{ $item->judul }}
                                </h5>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section id="bagian-guru" class="py-5" style="background-color: #ffffff;">
        <div class="container">
            <div class="d-flex justify-content-between align-items-end mb-5">
                <div>
                    <h2 class="fw-bold mb-1" style="color: #333;">Data Guru</h2>
                    <p class="text-muted mb-0">Guru Dan Staf SMK MUDABA</p>
                </div>
                <a href="{{ route('guru-staf') }}" class="text-success fw-bold text-decoration-none"
                    style="font-size: 14px;">
                    Selengkapnya <i class="fas fa-chevron-right ms-1"></i>
                </a>
            </div>

            <div class="row g-4 justify-content-center">
                @foreach ($guru as $index => $item)
                    <div class="col-6 col-md-4 col-lg-2-custom"> {{-- Gunakan class custom atau col-lg-2 --}}
                        <div class="text-center">
                            {{-- Wrapper Foto dengan Background Berwarna --}}
                            <div class="staff-card-new mb-3"
                                style="background-color: {{ $index % 2 == 0 ? '#e63946' : '#457b9d' }}; border-radius: 15px; overflow: hidden; aspect-ratio: 3/4;">
                                <img src="{{ asset('storage/guru/' . $item->foto) }}" class="w-100 h-100"
                                    style="object-fit: cover; object-position: top;" alt="{{ $item->nama }}">
                            </div>

                            {{-- Nama & Jabatan --}}
                            <h6 class="fw-bold mb-1" style="font-size: 14px; color: #333;">{{ $item->nama }}</h6>
                            <p class="text-muted" style="font-size: 11px;">{{ $item->jabatan }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="testimoni-section py-5" style="background-color: #ffffff;">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold mb-1" style="color: #333;">Testimoni</h2>
            <p class="text-muted">Pendapat dan pengalaman lulusan SMK Muhammadiyah 2 Bantul</p>
        </div>

        <div class="owl-carousel owl-theme testi-carousel">
            {{-- Item 1 --}}
            <div class="item p-3">
                <div class="card border-0 shadow-sm p-4" style="border-radius: 20px;">
                    <div class="text-end mb-3" style="color: #cde4da;">
                        <i class="fas fa-quote-right fa-2x"></i>
                    </div>
                    <p class="text-muted mb-4" style="font-style: italic; font-size: 14px; line-height: 1.6;">
                        "Saya sangat beruntung bersekolah di SMK MUHAMMADIYAH 2 BANTUL karena materi yang diberikan sangat bermanfaat bagi karier saya."
                    </p>
                    <div class="d-flex align-items-center">
                        <img src="{{ asset('images/user-icon.png') }}" class="rounded-circle me-3" style="width: 50px; height: 50px;">
                        <div>
                            <h6 class="fw-bold mb-0" style="font-size: 14px;">Dhea Maharani</h6>
                            <div class="text-warning mb-1" style="font-size: 10px;">
                                <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                            </div>
                            <small class="text-muted" style="font-size: 11px;">5 bulan lalu</small>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Item 2 --}}
            <div class="item p-3">
                <div class="card border-0 shadow-sm p-4" style="border-radius: 20px;">
                    <div class="text-end mb-3" style="color: #cde4da;">
                        <i class="fas fa-quote-right fa-2x"></i>
                    </div>
                    <p class="text-muted mb-4" style="font-style: italic; font-size: 14px; line-height: 1.6;">
                        "SMK Muhammadiyah 2 Bantul merupakan SMK Swasta terfavorit dan populer di Bantul. Fasilitas lengkap dan gurunya sangat kompeten."
                    </p>
                    <div class="d-flex align-items-center">
                        <img src="{{ asset('images/user-icon.png') }}" class="rounded-circle me-3" style="width: 50px; height: 50px;">
                        <div>
                            <h6 class="fw-bold mb-0" style="font-size: 14px;">Ulin Nafis</h6>
                            <div class="text-warning mb-1" style="font-size: 10px;">
                                <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                            </div>
                            <small class="text-muted" style="font-size: 11px;">6 tahun lalu</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('js')
    @include('component.script')
@endsection