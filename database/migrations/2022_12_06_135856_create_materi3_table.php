<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMateri3Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('materi3', function (Blueprint $table) {
            $table->id();
            $table->string('nama_materi');
            $table->string('matkul');
            $table->string('semester');
            $table->string('kategori_materi')->nullable();
            $table->string('deskripsi')->nullable();
            $table->string('file');
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
        Schema::dropIfExists('materi3');
    }
}
