<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMarketnsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('marketns', function (Blueprint $table) {
            $table->increments('id'); //membuat kolom id auto increment
            $table->string('namaBarang'); //membuat kolom nama
            $table->string('JenisBarang'); //membuat kolom email
            $table->string('Brand'); //membuat kolom no hp
            $table->text('Desc_Barang'); //membuat kolom alamat dengan tipe text
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
        Schema::dropIfExists('marketns');
    }
}
