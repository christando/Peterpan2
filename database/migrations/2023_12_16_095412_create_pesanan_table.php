<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pesanan', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('id_driver')->nullable();
            $table->foreign('id_driver')->references('id')->on('users');
            $table->unsignedBigInteger('id_mobil')->nullable();
            $table->foreign('id_mobil')->references('id')->on('mobil');
            $table->string('tujuan');
            $table->string('jenis_mobil');
            $table->string('kapasitas');
            $table->string('driver')->nullable();
            $table->date('tanggal_berangkat');
            $table->date('tanggal_sampai');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pesanan');
    }
};
