<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ProfilSekolah;

class ProfilController extends Controller
{
    public function index()
    {
        $profil = ProfilSekolah::all();

        return view('admin.profil-sekolah.profil-sekolah', compact('profil'));
        // sesuaikan dengan lokasi blade kamu
    }

    public function destroy($id)
    {
        $data = ProfilSekolah::findOrFail($id);

        // Hapus file jika ada
        if (!empty($data->gambar)) {

            $filePath = public_path('storage/profil/' . $data->gambar);

            if (file_exists($filePath)) {
                unlink($filePath);
            }
        }

        $data->delete();

        return redirect()->back()->with('success', 'Data berhasil dihapus');
    }

    public function show($id)
    {
        return redirect()->route('admin.profil-sekolah.index');
    }
}
