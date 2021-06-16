<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTambahaninformasikampusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('infokampuses', function (Blueprint $table) {
            //
            // $table->longtext('deskripsi_kampus')->after('namakampus')->nullable();
             $table->string('akreditasi')->nullable();
             $table->longtext('deskripsi_kampus')->nullable();
             $table->integer('jumlah_mahasiswa')->nullable();
             $table->integer('jumlah_dosen')->nullable();
             $table->string('email')->nullable();
             $table->string('website')->nullable();
             $table->string('biaya_kuliah')->nullable();
             $table->integer('telepon')->nullable();



        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
