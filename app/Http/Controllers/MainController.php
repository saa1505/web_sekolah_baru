<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sambutan;
use App\Models\Agenda;
use App\Models\Informasi;
use App\Models\Kurikulum; // Untuk data guru/wakasek

class MainController extends Controller
{
    public function index()
    {
        // Mengambil data dari database
        $sambutan = Sambutan::first();
        $agenda = Agenda::latest()->take(3)->get();
        $informasi = Informasi::latest()->take(3)->get();
        $guru = Kurikulum::take(5)->get();

        // Mengirimkan data ke welcome.blade.php
        return view('beranda', compact('sambutan', 'agenda', 'informasi', 'guru'));
    }

    public function profil()
    {
        // Ganti \App\Models\Profil menjadi \App\Models\Profile (pakai 'e')
        $profil = \App\Models\Profile::first();

        // Pastikan di dalam compact namanya 'profil' (huruf kecil semua)
        return view('profil-kami.profil-sekolah', compact('profil'));
    }

    public function identitas()
    {
        // Baris ini yang mengambil data asli dari database
        $identitas = \App\Models\IdentitasSekolah::first();

        // Baris ini yang "mengirim" data itu ke tampilan (frontend)
        return view('profil-kami.identitas-sekolah', compact('identitas'));
    }

    public function sejarah()
    {
        // Ambil data sejarah pertama
        $sejarah = \App\Models\Sejarah::first();

        return view('profil-kami.sejarah-singkat', compact('sejarah'));
    }

    public function kurikulum()
    {
        // Ambil data kurikulum pertama
        $data = \App\Models\Kurikulum::first();

        return view('unit-kerja.wakasek-kurikulum', compact('data'));
    }

    public function kesiswaan()
    {
        // Ambil satu baris data kesiswaan
        $data = \App\Models\Kesiswaan::first();

        return view('unit-kerja.wakasek-kesiswaan', compact('data'));
    }

    public function humas()
    {
        $data = \App\Models\Humas::first();
        $mitras = \App\Models\Mitra::all(); // Ambil semua data mitra industri

        return view('unit-kerja.wakasek-humas', compact('data', 'mitras'));
    }

    public function sarpras()
    {
        // Ambil data sarpras pertama dari database
        $data = \App\Models\Sarpras::first();

        return view('unit-kerja.wakasek-sarpras', compact('data'));
    }

    public function ismuba()
    {
        // Ambil data pertama dari tabel ismubas
        $data = \App\Models\Ismuba::first();

        return view('unit-kerja.wakasek-ismuba', compact('data'));
    }

    public function tefa()
    {
        // Pastikan variabelnya bernama $tefa (huruf kecil semua)
        $tefa = \App\Models\TeachingFactory::first();

        // Di sini kuncinya! 'tefa' di dalam compact HARUS string tanpa tanda $
        return view('unit-kerja.Teaching-Factory', compact('tefa'));
    }
    public function jurusan()
    {
        $programs = \App\Models\Jurusan::all();

        // Pastikan 'programs' ada di dalam compact
        return view('program-keahlian', compact('programs'));
    }
    public function agenda()
    {
        // Ambil semua data agenda dari database
        $agenda = \App\Models\Agenda::all();

        // Kirim variabel 'agenda' ke view
        return view('agenda', compact('agenda'));
    } // Penutup fungsi agenda

    public function informasi()
    {
        // Ambil data berita terbaru
        $beritas = \App\Models\Berita::latest()->get();

        // Kirim variabel 'beritas' ke view
        return view('informasi', compact('beritas'));
    }

    public function kontak()
    {
        // Ambil data kontak dari database (Sesuaikan dengan nama model lo, misal 'Kontak')
        $kontak = \App\Models\Kontak::first();

        // Tampilkan view kontak dan kirim datanya
        return view('kontak', compact('kontak'));
    }

    public function guru(Request $request)
    {
        $query = \App\Models\Guru::query();

        // Logika Filter jika ada kiriman kategori
        if ($request->has('filter') && $request->filter != '') {
            $query->where('kategori', $request->filter);
        }

        $gurus = $query->get();
        return view('guru-staf', compact('gurus'));
    }
} // PENUTUP CLASS (Paling akhir)