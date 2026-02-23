<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Kesiswaan; // Import Model

class KesiswaanController extends Controller
{
    public function index()
    {
        $kesiswaan = Kesiswaan::all();
        // Ingat struktur folder: admin/unit-kerja/wakasek-kesiswaan.blade.php
        return view('admin.unit-kerja.wakasek-kesiswaan', compact('kesiswaan'));
    }
}