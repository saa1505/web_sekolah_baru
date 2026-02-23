<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Sarpras; // Import Model Sarpras

class SarprasController extends Controller
{
    public function index()
    {
        $sarpras = Sarpras::all();
        // Sesuai struktur folder: admin/unit-kerja/wakasek-sarpras.blade.php
        return view('admin.unit-kerja.wakasek-sarpras', compact('sarpras'));
    }
}