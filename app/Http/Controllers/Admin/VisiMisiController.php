<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
// Panggil Model di sini agar VS Code tahu lokasinya
use App\Models\VisiMisi;

class VisiMisiController extends Controller
{
    public function visiMisi()
    {
        // Ambil data dari database
        $data = \App\Models\VisiMisi::first();

        // Kirim ke view
        return view('profil-kami.visi-misi', compact('data'));
    }
}
