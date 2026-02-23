<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Kontak; // Import Model Kontak

class KontakController extends Controller
{
    public function index()
    {
        // Mengambil data kontak pertama karena biasanya cuma ada satu data
        $kontak = Kontak::first();
        return view('admin.kontak', compact('kontak'));
    }
}