<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artikelbeasiswamagang extends Model
{
    use HasFactory;
    protected $table = 'artikelbeasiswamagangs';
    protected $fillable = ['namamagangbeasiswa', 'tanggal_mulai', 'tanggal_akhir', 'partisipan', 'deskripsi', 'persyaratan', 'timeline', 'telepon', 'instagram', ];
}
