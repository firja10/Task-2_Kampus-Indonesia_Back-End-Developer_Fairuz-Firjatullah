<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artikelinformasikampus extends Model
{
    use HasFactory;
    protected $table = 'artikelinformasikampuses';
    protected $fillable = [
        'namakampus', 'alamatkampus', 'lambangkampus','akreditasi','deskripsi_kampus','jumlah_mahasiswa', 'jumlah_dosen', 'email', 'website', 'biaya_kuliah', 'telepon',
    ];
}
