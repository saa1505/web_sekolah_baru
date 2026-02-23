@extends('main.index')

@section('css')
    @include('component.css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
@endsection

@section('content')
    <div class="container my-5">
        <h2 class="page-title">Visi & Misi</h2>

        {{-- Bagian Visi --}}
        <div class="visi-card">
            <span class="section-label">Visi Satuan Pendidikan</span>
            <p class="visi-text">
                "{{ $data->visi ?? 'Visi belum diisi' }}"
            </p>
        </div>

        {{-- Bagian Misi --}}
        <div class="misi-section">
            <div class="misi-header">
                <span class="text-bold text-uppercase fw-bold" style="letter-spacing: 2px; font-size: 0.75rem;">Langkah Nyata</span>
                <h3>Misi Satuan Pendidikan</h3>
                <p class="text-muted mx-auto mt-2" style="max-width: 600px;">
                    Komitmen kami dalam menyelenggarakan pendidikan vokasi berkualitas tinggi untuk masa depan siswa.
                </p>
            </div>

            <div class="misi-grid">
                {{-- Jika data misi di database berupa teks panjang/HTML --}}
                <div class="misi-full-content">
                    {!! $data->misi ?? 'Misi belum diisi' !!}
                </div>
            </div>
        </div>
    </div>
@endsection