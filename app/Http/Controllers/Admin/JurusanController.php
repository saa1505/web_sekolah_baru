<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Jurusan; // Pastikan Model ini dipanggil

class JurusanController extends Controller
{
    public function index()
    {
        $jurusan = Jurusan::all();
        // Sesuaikan dengan letak file kamu di resources/views/admin/
        return view('admin.program-keahlian', compact('jurusan'));
    }

    public function indexFrontend()
    {
        $programs = \App\Models\Jurusan::all();
        return view('program-keahlian', compact('programs'));
    }
}
