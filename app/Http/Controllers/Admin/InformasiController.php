<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Informasi; // Import Model Informasi

class InformasiController extends Controller
{
    public function index()
    {
        $informasi = Informasi::all();
        // Memanggil file blade di: resources/views/admin/informasi.blade.php
        return view('admin.informasi', compact('informasi'));
    }
}