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

            <form action="{{ route('pendaftaran.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="section-header">Data Siswa</div>
                <div class="form-box">
                    <div class="row mb-4">
                        <label class="col-sm-3 col-form-label fw-bold">Nama Lengkap <span
                                class="text-danger">*</span></label>
                        <div class="col-sm-9">
                            <input type="text" name="nik_nisn" class="form-control" placeholder="Masukkan Nama Lengkap"
                                required>
                        </div>
                    </div>

                    <div class="row mb-4">
                        <label class="col-sm-3 col-form-label form-label">Jenis Kelamin <span
                                class="text-danger">*</span></label>
                        <div class="col-sm-9">
                            <select name="jenis_pendaftaran" class="form-select" required>
                                <option value="">-- Pilih --</option>
                                <option value="Siswa Baru">Perempuan</option>
                                <option value="Siswa Pindahan">Laki-laki</option>
                            </select>
                        </div>
                    </div>

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
                            <input type="text" name="nik_nisn" class="form-control" placeholder="Masukkan Alamat"
                                required>
                        </div>
                    </div>

                    <div class="row mb-4">
                        <label class="col-sm-3 col-form-label fw-bold">Agama <span class="text-danger">*</span></label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" value="Islam" readonly>
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
                            <select name="jenis_pendaftaran" class="form-select" required>
                                <option value="">-- Pilih --</option>
                                <option value="Siswa Baru">Inden</option>
                                <option value="Siswa Pindahan">AUM</option>
                                <option value="Siswa Pindahan">Prestasi</option>
                            </select>
                        </div>
                    </div>

                    <div class="row mb-4">
                        <label class="col-sm-3 col-form-label fw-bold">NIK / NISN <span class="text-danger">*</span></label>
                        <div class="col-sm-9">
                            <input type="text" name="nik_nisn" class="form-control" placeholder="Masukkan NIK / NISN"
                                required>
                        </div>
                    </div>

                    <div class="row mb-4">
                        <label class="col-sm-3 col-form-label fw-bold">Nomor Telepon <span
                                class="text-danger">*</span></label>
                        <div class="col-sm-9">
                            <input type="text" name="nik_nisn" class="form-control" placeholder="Masukkan Nomor Telepon"
                                required>
                        </div>
                    </div>

                    <div class="row mb-4">
                        <label class="col-sm-3 col-form-label fw-bold">Email <span class="text-danger">*</span></label>
                        <div class="col-sm-9">
                            <input type="text" name="nik_nisn" class="form-control" placeholder="Masukkan Email"
                                required>
                        </div>
                    </div>

                    <div class="row mb-4">
                        <label class="col-sm-3 col-form-label fw-bold">Nama Sekolah Asal <span
                                class="text-danger">*</span></label>
                        <div class="col-sm-9">
                            <input type="text" name="nik_nisn" class="form-control"
                                placeholder="Masukkan Nama Sekolah Asal" required>
                        </div>
                    </div>

                    <div class="row mb-4">
                        <label class="col-sm-3 col-form-label fw-bold">Program Keahlian <span
                                class="text-danger">*</span></label>
                        <div class="col-sm-9">
                            <select name="jenis_pendaftaran" class="form-select" required>
                                <option value="">-- Pilih --</option>
                                <option value="Siswa Baru">Pengembangan Perangkat Lunak & Gim</option>
                                <option value="Siswa Pindahan">Desain Komunikasi Visual</option>
                                <option value="Siswa Pindahan">Manajemen Perkantoran & Layanan Bisnis </option>
                                <option value="Siswa Pindahan">Pemasaran</option>
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
                            <input type="text" name="nik_nisn" class="form-control"
                                placeholder="Masukkan Nama Lengkap" required>
                        </div>
                    </div>

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
                        <label class="col-sm-3 col-form-label form-label">Jenis Kelamin <span
                                class="text-danger">*</span></label>
                        <div class="col-sm-9">
                            <select name="jenis_pendaftaran" class="form-select" required>
                                <option value="">-- Pilih --</option>
                                <option value="Siswa Baru">Perempuan</option>
                                <option value="Siswa Pindahan">Laki-laki</option>
                            </select>
                        </div>
                    </div>

                    <div class="row mb-4">
                        <label class="col-sm-3 col-form-label fw-bold">Nomor Telepon Orang Tua / Wali <span
                                class="text-danger">*</span></label>
                        <div class="col-sm-9">
                            <input type="text" name="nik_nisn" class="form-control"
                                placeholder="Masukkan Nomor Telepon" required>
                        </div>
                    </div>

                    <div class="row mb-4">
                        <label class="col-sm-3 col-form-label fw-bold">Pekerjaan Orang Tua / Wali <span
                                class="text-danger">*</span></label>
                        <div class="col-sm-9">
                            <input type="text" name="nik_nisn" class="form-control"
                                placeholder="Masukkan Pekerjaan Orang Tua / Wali" required>
                        </div>
                    </div>

                    <div class="row mb-4">
                        <label class="col-sm-3 col-form-label fw-bold">Alamat <span class="text-danger">*</span></label>
                        <div class="col-sm-9">
                            <input type="text" name="nik_nisn" class="form-control" placeholder="Masukkan Alamat"
                                required>
                        </div>
                    </div>
                </div>

                <div class="section-header">Upload Dokumen</div>
                <p class="text-muted small">
                    Format file: JPG, JPEG, PNG, atau PDF. Maksimal 2MB.
                </p>
                <div class="form-box">
                    <div class="mb-3">
                        <label class="form-label">Pas Foto (3x4) <span class="text-danger">*</span></label>
                        <input type="file" class="form-control" name="pas foto" accept=".jpg,.jpeg,.png,.pdf"
                            required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Kartu Keluarga <span class="text-danger">*</span></label>
                        <input type="file" class="form-control" name="kk" accept=".jpg,.jpeg,.png,.pdf"
                            required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Akta Kelahiran <span class="text-danger">*</span></label>
                        <input type="file" class="form-control" name="akte" accept=".jpg,.jpeg,.png,.pdf"
                            required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">KIP (Jika Ada)</label>
                        <input type="file" class="form-control" name="kip" accept=".jpg,.jpeg,.png,.pdf"
                            required>
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
        </div>
    </div>
@endsection

@section('js')
    @include('component.script')
    <script src="{{ asset('js/pendaftaran-script.js') }}"></script>
@endsection
