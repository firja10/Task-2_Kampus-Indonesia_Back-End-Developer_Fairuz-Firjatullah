<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInfokampusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('infokampuses', function (Blueprint $table) {
            $table->id();
            // $table->bigIncrements('id');
            $table->string('namakampus')->nullable();
            $table->string('jurusankampus')->nullable();
            $table->string('alamatkampus')->nullable();
            $table->string('lambangkampus')->nullable();
            $table->string('foto_tempat')->nullable();
            $table->string('akreditasi')->nullable();
            $table->longtext('deskripsi_kampus')->nullable();
            $table->integer('jumlah_mahasiswa')->nullable();
            $table->integer('jumlah_dosen')->nullable();
            $table->string('email')->nullable();
            $table->string('website')->nullable();
            $table->string('biaya_kuliah')->nullable();
            $table->integer('telepon')->nullable();




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
        Schema::dropIfExists('infokampuses');
    }
}
