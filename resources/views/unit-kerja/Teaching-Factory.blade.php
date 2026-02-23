@extends('main.index')

@section('css')
    @include('component.css')
    {{-- Tambahkan CSS khusus jika ada --}}
    <style>
        .tefa-img {
            width: 100%;
            border-radius: 15px;
            object-fit: cover;
            max-height: 500px;
        }

        .tefa-title {
            font-weight: 800;
            color: #2c3e50;
        }
    </style>
@endsection

@section('content')
    <div class="container my-5">
        <div class="row">
            <div class="col-12">
                <h2 class="tefa-title mb-4">Teaching Factory</h2>

                {{-- Gambar Dinamis dari Backend --}}
                @if ($tefa && $tefa->gambar)
                    <img src="{{ asset('storage/' . $tefa->gambar) }}" class="tefa-img" alt="Kadwa Creative">
                @endif
                {{-- @else nya dihapus supaya nggak ada gambar cadangan --}}

                <div class="tefa-text mt-4">
                    {{-- Deskripsi Dinamis --}}
                    {!! $tefa->deskripsi ?? '<p>Konten Teaching Factory belum diisi.</p>' !!}
                </div>
            </div>
        </div>
    </div>
@endsection