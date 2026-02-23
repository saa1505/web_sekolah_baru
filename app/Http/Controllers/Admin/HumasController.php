<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Humas; // Import Model

class HumasController extends Controller
{
    public function index()
    {
        $humas = Humas::all();
        // Sesuai struktur folder kamu: admin/unit-kerja/wakasek-humas.blade.php
        return view('admin.unit-kerja.wakasek-humas', compact('humas'));
    }
}