<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pendaftaran extends Model
{
    protected $table = 'pendaftarans';
    protected $guarded = []; // Agar semua input bisa masuk
    protected $fillable = [
        'nama_lengkap',
        'jenis_kelamin',
        'nik',
        'nisn',
        'tempat_lahir',
        'tanggal_lahir',
        'alamat',
        'agama',
        'jenis_pendaftaran',
        'jalur_pendaftaran',
        'sekolah_asal',
        'program_keahlian',
        'no_telp',
        'email',
        'nama_ortu',
        'no_telp_ortu',
        'pekerjaan_ortu',
        'alamat_ortu',
        'pas_foto',
        'kk',
        'akta_lahir',
        'kip',
    ];
}
