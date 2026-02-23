<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VisiMisi extends Model
{
    use HasFactory;

    // Tambahkan ini jika nama tabel di database manual (tanpa 's')
    protected $table = 'visi_misis'; 

    // Tambahkan ini agar data bisa diisi lewat form nantinya
    protected $fillable = ['visi', 'misi', 'tujuan']; 
}