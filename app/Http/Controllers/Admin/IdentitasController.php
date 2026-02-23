<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\IdentitasSekolah; // Pastikan baris ini ADA dan BENAR

class IdentitasController extends Controller
{
    public function index()
    {
        $identitas = IdentitasSekolah::all();
        return view('admin.identitas-sekolah', compact('identitas'));
    }
}