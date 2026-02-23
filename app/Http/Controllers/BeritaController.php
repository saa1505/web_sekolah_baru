<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita; // Pastikan ini ada agar tidak merah

class BeritaController extends Controller
{
    // Fungsi Show yang sudah kamu buat
    public function show($slug)
    {
        $berita = Berita::where('slug', $slug)->firstOrFail();
        $beritaTerkait = Berita::where('slug', '!=', $slug)->limit(5)->get();
        return view('detail-informasi.show', compact('berita', 'beritaTerkait'));
    }

    // TARUH DI SINI (Di bawah fungsi show)
    public function index()
    {
        // Mengambil semua data dari tabel beritas
        $beritas = Berita::all(); 

        // Mengirim variabel $beritas ke view informasi.blade.php
        return view('informasi', compact('beritas'));
    }
} // Ini adalah kurung tutup terakhir dari class