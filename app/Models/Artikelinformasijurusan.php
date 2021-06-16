<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artikelinformasijurusan extends Model
{
    use HasFactory;

    protected $table = 'artikelinformasijurusans';
    protected $fillable = [
        'namajurusan', 'deskripsi_jurusan', 'lambangjurusan', 'prospek_kerja', 'keahlian_dan_pengetahuan', 'lambangprospek_kerja'
    ];
}
