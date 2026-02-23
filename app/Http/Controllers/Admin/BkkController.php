<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Bkk; // Import Model Bkk

class BkkController extends Controller
{
    public function index()
    {
        $bkk = Bkk::all();
        // Ingat struktur folder: admin/unit-kerja/bursa-kerja-khusus.blade.php
        return view('admin.unit-kerja.bursa-kerja-khusus', compact('bkk'));
    }
}