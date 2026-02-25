@extends('main.index')

@section('css')
    @include('component.css')
    {{-- Memanggil Library AOS dan File CSS Custom --}}
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/spmb-style.css') }}">
@endsection

@section('content')
    <div class="container my-5">
        <div class="text-center mb-5" data-aos="fade-down">
            <h2 class="fw-bold">Jalur Penerimaan Murid Baru</h2>
            <h4 class="text-success-custom">Tahun Ajaran 2026/2027</h4>
        </div>

        <div class="row g-4">
            @foreach ($jalurs as $index => $jalur)
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="{{ $index * 150 }}">
                    <div class="card h-100 shadow-sm p-2 jalur-card">
                        <div class="card-body d-flex flex-column text-start">

                            <h5 class="fw-bold text-dark mb-2">{{ $jalur->nama_jalur }}</h5>
                            <hr class="mt-1 mb-3 divider-custom">

                            <div class="mb-3 text-muted" style="font-size: 0.85rem;">
                                <i class="far fa-calendar-alt me-1 text-success-custom"></i> {{ $jalur->periode }}
                            </div>

                            <div class="card-text flex-grow-1 text-secondary" style="font-size: 0.9rem; line-height: 1.6;">
                                {!! $jalur->deskripsi !!}
                            </div>

                            <hr class="mt-4 mb-3 divider-custom">

                            <div>
                                @if ($jalur->is_open)
                                    <a href="/pendaftaran" class="btn-spmb-custom"
                                        style="border-radius: 5px; background-color: #198754;">DAFTAR SEKARANG</a>
                                @else
                                    <button class="btn btn-light w-100 text-muted fw-bold py-2" disabled
                                        style="border-radius: 5px; border: 1px solid #ddd;">BELUM DIBUKA</button>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection

@section('js')
    @include('component.script')
    {{-- Memanggil Library AOS dan File JS Custom --}}
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="{{ asset('js/spmb-script.js') }}"></script>
@endsection