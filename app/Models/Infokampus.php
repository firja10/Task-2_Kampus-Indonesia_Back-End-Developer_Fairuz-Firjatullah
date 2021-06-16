<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Infokampus extends Model
{
    // use HasFactory;
    protected $table = 'infokampuses';
    protected $fillable = [
        'namakampus', 'alamatkampus', 'lambangkampus','akreditasi','deskripsi_kampus','jumlah_mahasiswa', 'jumlah_dosen', 'email', 'website', 'biaya_kuliah', 'telepon',
    ];

    // public function infojurusans(){
    //     return $this->hasMany(Infojurusan::class);

    // }
}
