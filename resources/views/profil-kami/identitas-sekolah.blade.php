@extends('main.index')

@section('css')
    @include('component.css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
@endsection

@section('content')
    <div class="container my-5">
        <div class="identitas-section">
            <h2 class="identitas-title">Identitas Sekolah</h2>
            
            <div class="info-grid">
                <div class="info-item">
                    <div class="info-icon"><i class="fas fa-school"></i></div>
                    <div class="info-content">
                        <label>Nama Sekolah</label>
                        {{-- Ambil dari database --}}
                        <span>{{ $identitas->nama_sekolah ?? 'Data Belum Diisi' }}</span>
                    </div>
                </div>

                <div class="info-item">
                    <div class="info-icon"><i class="fas fa-fingerprint"></i></div>
                    <div class="info-content">
                        <label>NPSN</label>
                        <span>{{ $identitas->npsn ?? '-' }}</span>
                    </div>
                </div>

                <div class="info-item">
                    <div class="info-icon"><i class="fas fa-info-circle"></i></div>
                    <div class="info-content">
                        <label>Status / Bentuk</label>
                        <span>{{ $identitas->status ?? '-' }}</span>
                    </div>
                </div>

                <div class="info-item">
                    <div class="info-icon"><i class="fas fa-users"></i></div>
                    <div class="info-content">
                        <label>Status Kepemilikan</label>
                        <span>{{ $identitas->status_kepemilikan ?? '-' }}</span>
                    </div>
                </div>

                <div class="info-item">
                    <div class="info-icon"><i class="fas fa-file-contract"></i></div>
                    <div class="info-content">
                        <label>SK Pendirian</label>
                        <span>{{ $identitas->sk_pendirian ?? '-' }}</span>
                    </div>
                </div>

                <div class="info-item">
                    <div class="info-icon"><i class="fas fa-calendar-alt"></i></div>
                    <div class="info-content">
                        <label>Tanggal SK Pendirian</label>
                        <span>{{ $identitas->tgl_sk_pendirian ?? '-' }}</span>
                    </div>
                </div>

                <div class="info-item">
                    <div class="info-icon"><i class="fas fa-certificate"></i></div>
                    <div class="info-content">
                        <label>Izin Operasional</label>
                        <span>{{ $identitas->izin_operasional ?? '-' }}</span>
                    </div>
                </div>

                <div class="info-item">
                    <div class="info-icon"><i class="fas fa-check-double"></i></div>
                    <div class="info-content">
                        <label>Tanggal SK Izin</label>
                        <span>{{ $identitas->tgl_sk_izin ?? '-' }}</span>
                    </div>
                </div>
            </div>

            <div class="alamat-header">
                <i class="fas fa-map-marked-alt"></i>
                <h5>ALAMAT SEKOLAH</h5>
            </div>

            <div class="info-grid">
                <div class="info-item">
                    <div class="info-icon"><i class="fas fa-map-pin"></i></div>
                    <div class="info-content">
                        <label>Alamat Utama</label>
                        <span>{{ $identitas->alamat ?? '-' }}</span>
                    </div>
                </div>

                <div class="info-item">
                    <div class="info-icon"><i class="fas fa-city"></i></div>
                    <div class="info-content">
                        <label>Kecamatan</label>
                        <span>{{ $identitas->kecamatan ?? '-' }}</span>
                    </div>
                </div>

                <div class="info-item">
                    <div class="info-icon"><i class="fas fa-map"></i></div>
                    <div class="info-content">
                        <label>Kabupaten / Provinsi</label>
                        <span>{{ $identitas->kabupaten ?? '-' }}, {{ $identitas->provinsi ?? '-' }}</span>
                    </div>
                </div>

                <div class="info-item">
                    <div class="info-icon"><i class="fas fa-mail-bulk"></i></div>
                    <div class="info-content">
                        <label>Kode Pos</label>
                        <span>{{ $identitas->kode_pos ?? '-' }}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection