<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Sejarah; // Import Model agar tidak merah

class SejarahController extends Controller
{
    public function index()
    {
        $sejarah = Sejarah::all();
        // Membuka file admin/sejarah-singkat.blade.php
        return view('admin.sejarah-singkat', compact('sejarah'));
    }
}