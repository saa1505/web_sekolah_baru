<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pendaftaran;
use App\Models\SpmbSetting;
use App\Models\Jurusan;

class PendaftaranController extends Controller
{
    public function index()
    {
        $jurusans = Jurusan::all();
        $setting = SpmbSetting::first();
        return view('spmb.pendaftaran', compact('jurusans', 'setting'));
    }

    public function store(Request $request)
    {
        // 1. Validasi CAPTCHA
        if ($request->captcha_user !== $request->captcha_asli) {
            return back()->with('error', 'Kode CAPTCHA tidak sesuai!')->withInput();
        }

        $data = $request->all();

        // 2. BUANG DATA CAPTCHA (WAJIB biar gak error Unknown Column)
        unset($data['captcha_user']);
        unset($data['captcha_asli']);

        // 3. Proses Upload File
        $files = ['pas_foto', 'kk', 'akta_lahir', 'kip', 'bukti_bayar'];
        foreach ($files as $file) {
            if ($request->hasFile($file)) {
                $data[$file] = $request->file($file)->store('dokumen-pendaftaran', 'public');
            }
        }

        // 4. Simpan ke Database
        Pendaftaran::create($data);

        return back()->with('success', 'Pendaftaran berhasil dikirim!');
    }

    public function adminIndex()
    {
        $pesans = Pendaftaran::latest()->get();
        return view('admin.pendaftaran.index', compact('pesans'));
    }

    public function adminShow($id)
    {
        $pendaftaran = Pendaftaran::findOrFail($id);
        return view('admin.pendaftaran.show', compact('pendaftaran'));
    }
}