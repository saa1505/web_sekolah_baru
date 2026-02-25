<?php

namespace App\Http\Controllers\Admin; // <--- PASTIKAN ADA "\Admin" NYA

use App\Http\Controllers\Controller;
use App\Models\Pendaftaran;
use Illuminate\Http\Request;

class PendaftaranController extends Controller
{
    public function index()
    {
        $pendaftar = Pendaftaran::all();
        return view('admin.kelola-jalur-SPMB', compact('pendaftar'));
    }

    public function store(Request $request)
    {
        // 1. Validasi CAPTCHA
        if ($request->captcha_user !== $request->captcha_asli) {
            return back()->with('error', 'Kode CAPTCHA tidak sesuai!')->withInput();
        }

        // 2. Ambil semua input dan bersihkan field non-database
        $data = $request->all();
        unset($data['captcha_user'], $data['captcha_asli'], $data['_token']);

        // 3. MAPPING SEMUA FIELD (Agar tidak ada yang NULL)
        // Kita paksa semua kolom terisi, minimal dengan tanda strip (-) jika kosong di form

        $data['nama_lengkap']      = $request->nama_lengkap ?? '-';
        $data['nisn']              = $request->nisn ?? $request->nik_nisn ?? '0'; // FIX ERROR image_35f570.png
        $data['nik']               = $request->nik ?? $request->nik_nisn ?? '0';
        $data['tempat_lahir']      = $request->tempat_lahir ?? '-';
        $data['tanggal_lahir']     = $request->tanggal_lahir ?? now()->format('Y-m-d');
        $data['jenis_kelamin']     = $request->jenis_kelamin ?? '-';
        $data['agama']             = $request->agama ?? 'Islam';
        $data['alamat']            = $request->alamat ?? '-';
        $data['no_telp']           = $request->no_telp ?? '-';
        $data['email']             = $request->email ?? '-';
        $data['sekolah_asal']      = $request->sekolah_asal ?? '-';
        $data['program_keahlian']  = $request->program_keahlian ?? '-';
        $data['jenis_pendaftaran'] = $request->jenis_pendaftaran ?? 'Siswa Baru';
        $data['jalur_pendaftaran'] = $request->jalur_pendaftaran ?? 'INDEN';

        // Data Orang Tua
        $data['nama_ortu']         = $request->nama_ortu ?? '-';
        $data['pekerjaan_ortu']    = $request->pekerjaan_ortu ?? '-';
        $data['no_telp_ortu']      = $request->no_telp_ortu ?? '-';
        $data['alamat_ortu']       = $request->alamat_ortu ?? '-';

        // 4. PROSES UPLOAD FILE
        $fileFields = [
            'pas_foto'    => 'pas_foto',
            'kk'          => 'kk',
            'akta_lahir'  => $request->hasFile('akte') ? 'akte' : 'akta_lahir',
            'kip'         => 'kip',
        ];

        foreach ($fileFields as $dbCol => $formName) {
            if ($request->hasFile($formName)) {
                $data[$dbCol] = $request->file($formName)->store('dokumen-pendaftaran', 'public');
            } else {
                // Beri nilai string kosong atau default agar tidak error jika database NOT NULL
                $data[$dbCol] = '-';
            }
        }

        // 5. EKSEKUSI SIMPAN
        try {
            Pendaftaran::create($data);
            return back()->with('success', 'Pendaftaran Berhasil Dikirim!');
        } catch (\Exception $e) {
            // Jika masih error, pesan ini akan memberitahu field mana yang kurang
            return back()->with('error', 'Gagal menyimpan: ' . $e->getMessage())->withInput();
        }
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
