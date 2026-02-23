<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Ismuba; // Import Model Ismuba

class IsmubaController extends Controller
{
    public function index()
    {
        $ismuba = Ismuba::all();
        // Ingat struktur folder: admin/unit-kerja/wakasek-ismuba.blade.php
        return view('admin.unit-kerja.wakasek-ismuba', compact('ismuba'));
    }
}