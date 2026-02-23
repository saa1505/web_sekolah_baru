<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


use App\Models\Siswa;
use App\Models\Guru;
use App\Models\Jurusan;
use App\Models\Pesan;
use App\Models\Pendaftaran;

class DashboardController extends Controller
{
    public function index()
    {
        $totalSiswa = Siswa::count();
        $totalGuru = Guru::count();
        $totalJurusan = Jurusan::count();
        $pesanBaru = Pesan::where('status', 'baru')->count();

        // 🔥 Tambahin ini
        $pendaftaranTerbaru = Pendaftaran::latest()->take(5)->get();

        return view('admin.dashboard', compact(
            'totalSiswa',
            'totalGuru',
            'totalJurusan',
            'pesanBaru',
            'pendaftaranTerbaru'
        ));
    }
}
