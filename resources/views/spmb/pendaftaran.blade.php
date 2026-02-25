@php
    $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $randomCaptcha = substr(str_shuffle($characters), 0, 5);
@endphp

@extends('main.index')

@section('css')
    @include('component.css')
    <link rel="stylesheet" href="{{ asset('css/pendaftaran-style.css') }}">
@endsection

@section('content')
    <div class="container my-5">
        <div class="card shadow-sm p-4" style="border-radius: 15px; border: none;">

            <h2 class="mb-2 fw-bold text-dark">
                {{ $setting->judul ?? 'Pendaftaran Murid Baru SMK Muhammadiyah 2 Bantul' }}
            </h2>
            <p class="text-muted mb-4">Silakan isi formulir di bawah ini dengan data yang valid.</p>
            @if (session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <i class="fas fa-check-circle me-2"></i>
                    {{-- GANTI TULISAN DI BAWAH INI --}}
                    <strong>Pendaftaran Berhasil!</strong> {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            @if (session('error'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <i class="fas fa-exclamation-triangle me-2"></i>
                    {{ session('error') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            {{-- ... bagian atas tetap sama ... --}}

            <form action="{{ route('pendaftaran.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="section-header">Data Siswa</div>
                <div class="form-box">
                    <div class="row mb-4">
                        <label class="col-sm-3 col-form-label fw-bold">Nama Lengkap <span
                                class="text-danger">*</span></label>
                        <div class="col-sm-9">
                            {{-- PERBAIKAN: name harus nama_lengkap --}}
                            <input type="text" name="nama_lengkap" class="form-control"
                                placeholder="Masukkan Nama Lengkap" required>
                        </div>
                    </div>

                    <div class="row mb-4">
                        <label class="col-sm-3 col-form-label form-label">Jenis Kelamin <span
                                class="text-danger">*</span></label>
                        <div class="col-sm-9">
                            {{-- PERBAIKAN: name harus jenis_kelamin dan value harus L/P --}}
                            <select name="jenis_kelamin" class="form-select" required>
                                <option value="">-- Pilih --</option>
                                <option value="PEREMPUAN">Perempuan</option>
                                <option value="LAKI-LAKI">Laki-laki</option>
                            </select>
                        </div>
                    </div>

                    {{-- Tempat & Tanggal Lahir sudah benar name-nya --}}
                    <div class="row mb-4">
                        <label class="col-sm-3 col-form-label fw-bold">Tempat,Tanggal Lahir <span
                                class="text-danger">*</span></label>
                        <div class="col-sm-9">
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="tempat_lahir"
                                        placeholder="Tempat Lahir" required>
                                </div>
                                <div class="col-md-6">
                                    <input type="date" class="form-control" name="tanggal_lahir" required>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row mb-4">
                        <label class="col-sm-3 col-form-label fw-bold">Alamat <span class="text-danger">*</span></label>
                        <div class="col-sm-9">
                            {{-- PERBAIKAN: name harus alamat --}}
                            <input type="text" name="alamat" class="form-control" placeholder="Masukkan Alamat"
                                required>
                        </div>
                    </div>

                    <div class="row mb-4">
                        <label class="col-sm-3 col-form-label fw-bold">Agama <span class="text-danger">*</span></label>
                        <div class="col-sm-9">
                            {{-- PERBAIKAN: tambahkan name="agama" walau readonly --}}
                            <input type="text" name="agama" class="form-control" value="Islam" readonly>
                        </div>
                    </div>

                    <div class="row mb-4">
                        <label class="col-sm-3 col-form-label form-label">Jenis Pendaftaran <span
                                class="text-danger">*</span></label>
                        <div class="col-sm-9">
                            <select name="jenis_pendaftaran" class="form-select" required>
                                <option value="">-- Pilih --</option>
                                <option value="Siswa Baru">Siswa Baru</option>
                                <option value="Siswa Pindahan">Siswa Pindahan</option>
                            </select>
                        </div>
                    </div>

                    <div class="row mb-4">
                        <label class="col-sm-3 col-form-label fw-bold">Jalur Pendaftaran <span
                                class="text-danger">*</span></label>
                        <div class="col-sm-9">
                            {{-- PERBAIKAN: name harus jalur_pendaftaran dan value sesuai pilihan --}}
                            <select name="jalur_pendaftaran" class="form-select" required>
                                <option value="">-- Pilih --</option>
                                <option value="INDEN">Inden</option>
                                <option value="AUM">AUM</option>
                                <option value="PRESTASI">Prestasi</option>
                            </select>
                        </div>
                    </div>

                    <div class="row mb-4">
                        <label class="col-sm-3 col-form-label fw-bold">NIK / NISN <span class="text-danger">*</span></label>
                        <div class="col-sm-9">
                            {{-- PERBAIKAN: name nik --}}
                            <input type="text" name="nik" class="form-control" placeholder="Masukkan NIK / NISN"
                                required>
                        </div>
                    </div>

                    <div class="row mb-4">
                        <label class="col-sm-3 col-form-label fw-bold">Nomor Telepon <span
                                class="text-danger">*</span></label>
                        <div class="col-sm-9">
                            {{-- PERBAIKAN: name no_telp --}}
                            <input type="text" name="no_telp" class="form-control"
                                placeholder="Masukkan Nomor Telepon" required>
                        </div>
                    </div>

                    <div class="row mb-4">
                        <label class="col-sm-3 col-form-label fw-bold">Email <span class="text-danger">*</span></label>
                        <div class="col-sm-9">
                            {{-- PERBAIKAN: name email --}}
                            <input type="email" name="email" class="form-control" placeholder="Masukkan Email"
                                required>
                        </div>
                    </div>

                    <div class="row mb-4">
                        <label class="col-sm-3 col-form-label fw-bold">Nama Sekolah Asal <span
                                class="text-danger">*</span></label>
                        <div class="col-sm-9">
                            {{-- PERBAIKAN: name sekolah_asal --}}
                            <input type="text" name="sekolah_asal" class="form-control"
                                placeholder="Masukkan Nama Sekolah Asal" required>
                        </div>
                    </div>

                    <div class="row mb-4">
                        <label class="col-sm-3 col-form-label fw-bold">Program Keahlian <span
                                class="text-danger">*</span></label>
                        <div class="col-sm-9">
                            {{-- PERBAIKAN: name program_keahlian dan value yang benar --}}
                            <select name="program_keahlian" class="form-select" required>
                                <option value="">-- Pilih --</option>
                                <option value="Pengembangan Perangkat Lunak dan Gim">Pengembangan Perangkat Lunak & Gim
                                </option>
                                <option value="Desain Komunikasi Visual">Desain Komunikasi Visual</option>
                                <option value="Manajemen Perkantoran dan Layanan Bisnis">Manajemen Perkantoran & Layanan
                                    Bisnis</option>
                                <option value="Pemasaran">Pemasaran</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="section-header">Data Orang Tua / Wali</div>
                <div class="form-box">
                    <div class="row mb-4">
                        <label class="col-sm-3 col-form-label fw-bold">Nama Lengkap Orang Tua / Wali <span
                                class="text-danger">*</span></label>
                        <div class="col-sm-9">
                            {{-- PERBAIKAN: name nama_ortu --}}
                            <input type="text" name="nama_ortu" class="form-control"
                                placeholder="Masukkan Nama Lengkap" required>
                        </div>
                    </div>

                    {{-- Tempat & Tanggal Lahir Ortu (Sesuaikan field database jika ada, atau gunakan nama yang unik) --}}
                    <div class="row mb-4">
                        <label class="col-sm-3 col-form-label fw-bold">Tempat,Tanggal Lahir <span
                                class="text-danger">*</span></label>
                        <div class="col-sm-9">
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="tempat_lahir_ortu"
                                        placeholder="Tempat Lahir" required>
                                </div>
                                <div class="col-md-6">
                                    <input type="date" class="form-control" name="tanggal_lahir_ortu" required>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row mb-4">
                        <label class="col-sm-3 col-form-label fw-bold">Pekerjaan Orang Tua / Wali <span
                                class="text-danger">*</span></label>
                        <div class="col-sm-9">
                            {{-- PERBAIKAN: name pekerjaan_ortu --}}
                            <input type="text" name="pekerjaan_ortu" class="form-control"
                                placeholder="Masukkan Pekerjaan" required>
                        </div>
                    </div>

                    <div class="row mb-4">
                        <label class="col-sm-3 col-form-label fw-bold">Alamat <span class="text-danger">*</span></label>
                        <div class="col-sm-9">
                            {{-- PERBAIKAN: name alamat_ortu --}}
                            <input type="text" name="alamat_ortu" class="form-control"
                                placeholder="Masukkan Alamat" required>
                        </div>
                    </div>
                    
                    <div class="row mb-4">
                        <label class="col-sm-3 col-form-label fw-bold">Nomor Telepon <span class="text-danger">*</span></label>
                        <div class="col-sm-9">
                            {{-- PERBAIKAN: name alamat_ortu --}}
                            <input type="text" name="no_telp_ortu" class="form-control"
                                placeholder="Masukkan Nomor Telepon" required>
                        </div>
                    </div>
                </div>

                <div class="section-header">Upload Dokumen</div>
                <div class="form-box">
                    <div class="mb-3">
                        <label class="form-label">Pas Foto (3x4) <span class="text-danger">*</span></label>
                        {{-- PERBAIKAN: name pas_foto (jangan pakai spasi) --}}
                        <input type="file" class="form-control" name="pas_foto" accept=".jpg,.jpeg,.png,.pdf"
                            required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Kartu Keluarga <span class="text-danger">*</span></label>
                        <input type="file" class="form-control" name="kk" accept=".jpg,.jpeg,.png,.pdf"
                            required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Akta Kelahiran <span class="text-danger">*</span></label>
                        {{-- PERBAIKAN: name akta_lahir --}}
                        <input type="file" class="form-control" name="akta_lahir" accept=".jpg,.jpeg,.png,.pdf"
                            required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">KIP (Jika Ada)</label>
                        <input type="file" class="form-control" name="kip" accept=".jpg,.jpeg,.png,.pdf">
                    </div>
                </div>

                <div class="section-header">Verifikasi</div>

                <div class="form-box">

                    <p class="mb-2 small">Masukkan kode verifikasi sesuai gambar di bawah ini.</p>

                    <div class="captcha-box p-2 mb-2 text-center">

                        {{ $randomCaptcha }}

                    </div>

                    <input type="text" name="captcha_user" class="form-control w-25 mb-3" placeholder="Kode"
                        required>

                    <input type="hidden" name="captcha_asli" value="{{ $randomCaptcha }}">



                    <div class="form-check">

                        <input class="form-check-input" type="checkbox" required id="confirm">

                        <label class="form-check-label small" for="confirm">

                            Saya menyatakan bahwa data yang saya isi adalah benar dan dapat dipertanggungjawabkan.

                        </label>

                    </div>

                </div>
                <div class="text-end">
                    <button type="submit" class="btn btn-success btn-daftar px-5 py-2 fw-bold">
                        DAFTAR SEKARANG
                    </button>
                </div>
            </form>

            {{-- ... bagian bawah tetap sama ... --}}
        </div>
    </div>
@endsection

@section('js')
    @include('component.script')
    <script src="{{ asset('js/pendaftaran-script.js') }}"></script>
@endsection
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Cari elemen alert/notifikasi sukses
        // Sesuaikan class-nya dengan yang lo pakai (misal: .alert atau .success-message)
        const successAlert = document.querySelector('.alert-success') || document.querySelector('.alert');

        if (successAlert) {
            // Set timer 3 detik (3000ms)
            setTimeout(function() {
                // Tambahkan efek transisi biar halus hilangnya
                successAlert.style.transition = "opacity 0.5s ease";
                successAlert.style.opacity = "0";
                
                // Hapus elemen dari layar setelah transisi selesai
                setTimeout(function() {
                    successAlert.remove();
                }, 500);
            }, 3000); // Ganti jadi 5000 kalau mau 5 detik
        }
    });
</script>
