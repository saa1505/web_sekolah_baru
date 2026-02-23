@extends('main.index')

@section('css')
    @include('component.css')
@endsection

@section('content')
    <div class="agenda-banner-page py-4" style="background-color: #0b5d34; color: #ffffff;">
        <div class="container">
            <h2 class="fw-bold mb-0" style="font-size: 28px; color: white;">Informasi</h2>
        </div>
    </div>

    <div class="container my-5">
        <div class="row g-4">
            <nav class="breadcrumb-container mt-2">
                <a href="{{ route('beranda') }}#bagian-berita" class="breadcrumb-link">Berita</a>
                <span class="breadcrumb-separator">/</span>
                <span class="breadcrumb-active">Informasi</span>
            </nav>

            {{-- Perulangan Berita --}}
            @forelse ($beritas as $item)
                <div class="col-md-6 col-lg-4">
                    <div class="card card-news shadow-sm h-100 border-0">
                        <div style="height: 200px; overflow: hidden;">
                            @if ($item->gambar)
                                {{-- Sesuaikan path gambar ke storage --}}
                                <img src="{{ asset('storage/' . $item->gambar) }}" class="card-img-top w-100 h-100" style="object-fit: cover;"
                                    alt="{{ $item->judul }}">
                            @else
                                <div class="bg-light d-flex align-items-center justify-content-center text-muted h-100"
                                    style="border-top-left-radius: 8px; border-top-right-radius: 8px;">
                                    <span>Tidak Ada Gambar</span>
                                </div>
                            @endif
                        </div>

                        <div class="card-body p-4">
                            <small class="text-muted d-block mb-2">
                                <i class="fas fa-calendar-alt me-1"></i>
                                {{ \Carbon\Carbon::parse($item->created_at)->translatedFormat('d F Y') }}
                            </small>

                            {{-- Menggunakan route name untuk detail berita --}}
                            <a href="{{ route('berita.show', $item->slug) }}"
                                class="news-title fw-bold text-decoration-none text-dark h5 d-block">
                                {{ $item->judul }}
                            </a>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-12 text-center py-5">
                    <p class="text-muted">Belum ada informasi yang diterbitkan.</p>
                </div>
            @endforelse
        </div>

        {{-- Pagination (Opsional: Kalau lo pake $beritas = Berita::paginate(6)) --}}
        @if($beritas instanceof \Illuminate\Pagination\LengthAwarePaginator)
            <div class="mt-5 d-flex justify-content-center">
                {{ $beritas->links() }}
            </div>
        @endif
    </div>
@endsection