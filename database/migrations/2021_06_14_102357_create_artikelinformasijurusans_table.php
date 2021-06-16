<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArtikelinformasijurusansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('artikelinformasijurusans', function (Blueprint $table) {
            $table->id();
            $table->string('namajurusan')->nullable() ;
            $table->string('lambangjurusan')->nullable() ;
            $table->longtext('deskripsi_jurusan')->nullable() ;
            $table->longtext('keahlian_dan_pengetahuan')->nullable() ;
            $table->longtext('prospek_kerja')->nullable() ;
            $table->string('lambangprospek_kerja')->nullable() ;
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
        Schema::dropIfExists('artikelinformasijurusans');
    }
}
