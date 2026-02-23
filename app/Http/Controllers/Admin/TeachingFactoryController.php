<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TeachingFactory; // Import Model

class TeachingFactoryController extends Controller
{
    public function index()
    {
        $tefa = TeachingFactory::all();
        // Ingat struktur folder: admin/unit-kerja/teaching-factory.blade.php
        return view('admin.unit-kerja.teaching-factory', compact('tefa'));
    }
}