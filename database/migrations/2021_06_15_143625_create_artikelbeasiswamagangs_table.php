<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArtikelbeasiswamagangsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('artikelbeasiswamagangs', function (Blueprint $table) {
            $table->id();
            $table->string('namamagangbeasiswa')->nullable();
            $table->string('foto_institusi')->nullable();
            $table->date('tanggal_mulai')->nullable();
            $table->date('tanggal_akhir')->nullable();
            $table->string('partisipan')->nullable();
            $table->longtext('deskripsi')->nullable();
            $table->longtext('persyaratan')->nullable();
            $table->longtext('timeline')->nullable();
            $table->string('telepon')->nullable();
            $table->string('instagram')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('artikelbeasiswamagangs');
    }
}
