@extends('main.index')

@section('css')
    @include('component.css')
@endsection

@section('content')
<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-lg-10">
            <h4 class="fw-bold mb-4" style="color: #333;">Profil Sekolah</h4>

            <div class="card border-0 shadow-sm mb-5" style="border-radius: 15px; overflow: hidden;">
                <img src="{{ asset('images/gedung-smk.jpg') }}" class="img-fluid w-100" alt="Gedung SMK Mudaba">
            </div>

            <div class="profil-text" style="line-height: 1.8; color: #555; text-align: justify;">
                @if($profil)
                    {!! $profil->isi_profil !!} {{-- Menggunakan {!! !!} agar format paragraf dari admin tetap terjaga --}}
                @else
                    <p>SMK Muhammadiyah 2 Bantul (SMK Mudaba) adalah sekolah menengah kejuruan yang berkomitmen mencetak generasi unggul, adaptif, dan berdaya saing di era ekonomi kreatif digital...</p>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection