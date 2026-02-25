<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Bkk; // Pastikan Model Bkk sudah ada

class BkkController extends Controller
{
    // Untuk tampilan Pengunjung (Frontend)
    public function index()
    {
        $bkk = Bkk::all(); 
        return view('unit-kerja.Bursa-Kerja-Khusus', compact('bkk'));
    }

    // Untuk tampilan Dashboard (Admin)
    public function adminIndex()
    {
        $bkk = Bkk::all();
        return view('admin.unit-kerja.Bursa-Kerja-Khusus', compact('bkk'));
    }
}