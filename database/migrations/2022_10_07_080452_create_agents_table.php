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
        Schema::create('agents', function (Blueprint $table) {
            $table->id();
            $table->string('nama_penjual');
            $table->string('foto_penjual');
            $table->string('email_penjual');
            $table->integer('nomor_penjual');
            $table->integer('whatsapp_penjual');
            $table->string('facebook_penjual');
            $table->string('instagram_penjual');
            $table->string('tiktok_penjual');
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
        Schema::dropIfExists('agents');
    }
};
