<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artikelblog extends Model
{
    use HasFactory;
    protected $table = 'artikelblogs';

    protected $fillable = ['judulartikel', 'foto_artikel', 'isiartikel', 'katakunciartikel', 'penulisartikel', 'kategori_artikel', ];
}
