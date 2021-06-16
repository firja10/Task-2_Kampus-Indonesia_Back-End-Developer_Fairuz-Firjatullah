<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArtikelblogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('artikelblogs', function (Blueprint $table) {
            $table->id();


            $table->string('judulartikel')->nullable();
            $table->longtext('isiartikel')->nullable();
            $table->string('katakunciartikel')->nullable();
            $table->string('penulisartikel')->nullable();
            $table->string('foto_artikel')->nullable();
            $table->string('kategori_artikel')->nullable();
            // $table->bigInteger('kategoriartikelblog_id')->unsigned()->nullable();
            // $table->foreign('kategoriartikelblog_id')->references('id')->on('kategoriartikelblogs')->onDelete('cascade');


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
        Schema::dropIfExists('artikelblogs');
    }
}
