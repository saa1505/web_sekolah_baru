<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class SpmbController extends Controller
{
    public function index()
    {
        // Kita buat data dummy dulu agar tampilan modernmu muncul
        $jalurs = [
            (object)[
                'nama_jalur' => '1. JALUR INDEN',
                'periode' => '1 September 2025 – 31 Desember 2025',
                'deskripsi' => 'Jalur Indent adalah program khusus pendaftaran sebelum 31 Desember 2025. Pendaftar mendapatkan <b>Gratis Seragam Sekolah</b>.',
                'is_open' => true,
                'slug' => 'inden'
            ],
            (object)[
                'nama_jalur' => '2. JALUR AUM',
                'periode' => '1 Januari 2026 – 31 Maret 2026',
                'deskripsi' => 'Program khusus lulusan SMP/MTs di bawah naungan Yayasan Muhammadiyah dengan potongan 30%/tahun.',
                'is_open' => false,
                'slug' => 'aum'
            ],
            // Tambahkan jalur lainnya di sini...
        ];

        return view('spmb.spmb-2026', compact('jalurs'));
    }

    public function adminIndex()
    {
        // Untuk sementara, kita kembalikan teks dulu agar tidak error
        return "Halaman Kelola Jalur SPMB Berhasil Diakses!";

        // Nanti kalau sudah buat file view-nya, ganti jadi:
        // return view('admin.spmb.index');
    }
}
