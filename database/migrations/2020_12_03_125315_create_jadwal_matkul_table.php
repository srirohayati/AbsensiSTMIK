<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJadwalMatkulTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jadwal_matkul', function (Blueprint $table) {
            $table->id();
            $table->string('smt');
            $table->string('ruang');
            $table->string('waktu');
            $table->string('hari');
            $table->unsignedBigInteger('kode');
            $table->string('matkul');
            $table->string('sks');
            $table->string('dosen');
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
        Schema::dropIfExists('jadwal_matkul');
    }
}
