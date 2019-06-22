<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePenggunaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penggunas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nip');
            $table->string('nama_lengkap');
            $table->string('nama_panggilan');
            $table->string('alamat');
            $table->string('jenis_kelamin');
            $table->string('email')->unique();
            $table->string('level_divisi_pengguna');
            $table->string('level_pengguna_di_divisi');
            $table->string('telepon');
            $table->string('handphone');
            $table->string('aktif');
            $table->string('blokir');
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
        Schema::dropIfExists('pengguna');
    }
}
