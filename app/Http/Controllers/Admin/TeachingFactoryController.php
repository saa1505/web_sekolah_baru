<?php

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
// Ganti 'TeachingFactory' di bawah sesuai dengan nama Model kamu jika berbeda
use App\Models\TeachingFactory;

class TeachingFactoryController extends Controller
{
    // Untuk Dashboard Admin
    public function admin_index()
    {
        $tefa = \App\Models\TeachingFactory::all();
        // PENTING: Harus ada 'admin.' di depannya!
        return view('admin.unit-kerja.Teaching-Factory', compact('tefa'));
    }

    // Untuk Pengunjung (Frontend)
    public function index()
    {
        $tefa = \App\Models\TeachingFactory::first();
        // Tanpa 'admin.' karena ini untuk tampilan luar
        return view('unit-kerja.Teaching-Factory', compact('tefa'));
    }
}
