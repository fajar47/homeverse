<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('uploads', function (Blueprint $table) {
            $table->id();
            $table->string('nama_penjual');
            $table->string('foto_penjual');
            $table->string('email_penjual');
            $table->string('nomor_penjual');
            $table->string('facebook_penjual');
            $table->string('whatsapp_penjual');
            $table->string('instagram_penjual');
            $table->string('foto_utama');
            $table->string('foto_1');
            $table->string('foto_2');
            $table->string('foto_3');
            $table->string('foto_4');
            $table->string('foto_5');
            $table->string('tipe');
            $table->integer('harga');
            $table->string('tipe_rumah');
            $table->integer('kasur');
            $table->integer('kamar_mandi');
            $table->string('kondisi_rumah');
            $table->string('kenyamanan_rumah');
            $table->integer('stok');
            $table->string('lokasi');
            $table->string('deskripsi');
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
        Schema::dropIfExists('uploads');
    }
};
