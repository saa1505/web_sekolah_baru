<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Kurikulum; // Import Model

class KurikulumController extends Controller
{
    public function index()
    {
        $kurikulum = Kurikulum::all();
        // Arahkan ke file kurikulum.blade.php di folder admin
        return view('admin.unit-kerja.wakasek-kurikulum', compact('kurikulum'));
    }
}