<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Pendaftaran; // Pastikan Model Pendaftaran di-import
use Illuminate\Http\Request;

class PendaftaranController extends Controller
{
    public function index()
    {
        // Ambil data pendaftar dari database
        $pendaftar = Pendaftaran::all(); 

        // Kirim datanya ke view
        return view('admin.kelola-jalur-SPMB', compact('pendaftar'));
    }

    public function destroy($id)
    {
        $item = Pendaftaran::findOrFail($id);
        $item->delete();
        return redirect()->back()->with('success', 'Data berhasil dihapus');
    }
}