<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pendaftaran extends Model
{
    protected $table = 'pendaftarans';
    protected $guarded = []; // Agar semua input bisa masuk

    protected $fillable = [
        'jenis_pendaftaran',
        'jalur_pendaftaran',
        'nik',
        'sekolah_asal',
        'program_keahlian',
        'nama_lengkap',
        'nisn',
        'jenis_kelamin',
        'tempat_lahir',
        'tanggal_lahir',
        'agama',
        'kewarganegaraan',
        'alamat',
        'desa',
        'kecamatan',
        'kabupaten',
        'kode_pos',
        'tempat_tinggal',
        'tempat_tinggal_lainnya',
        'anak_ke',
        'jumlah_saudara',
        'memiliki_kip',
        'terima_kip',
        'nama_ayah',
        'nik_ayah',
        'tempat_lahir_ayah',
        'tgl_lahir_ayah',
        'pendidikan_ayah',
        'pekerjaan_ayah',
        'penghasilan_ayah',
        'nama_ibu',
        'nik_ibu',
        'tempat_lahir_ibu',
        'tgl_lahir_ibu',
        'pendidikan_ibu',
        'pekerjaan_ibu',
        'penghasilan_ibu',
        'hp_siswa',
        'email_siswa',
        'hp_orang_tua',
        // Bagian ini yang sering bikin error kalau lupa dimasukin:
        'pas_foto',
        'kk',
        'akta_lahir',
        'kip',
        'bukti_bayar'
    ];
}
