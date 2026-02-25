<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    // Gunakan 'siswas' (pakai s) agar sesuai standar Laravel
    protected $table = 'siswas'; 

    public function jurusan()
    {
        return $this->belongsTo(Jurusan::class, 'jurusan_id');
    }
}