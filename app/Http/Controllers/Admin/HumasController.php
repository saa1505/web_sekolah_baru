<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Humas;

class HumasController extends Controller
{
    public function index()
    {
        // KHUSUS FRONTEND (Tampilan Pengunjung)
        $mitras = Humas::all();
        return view('unit-kerja.wakasek-humas', compact('mitras'));
    }

    public function admin_index()
    {
        // KHUSUS BACKEND (Tampilan Admin Panel)
        $humas = Humas::all();
        return view('admin.unit-kerja.wakasek-humas', compact('humas'));
    }
}
