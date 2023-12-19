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
        Schema::create('order_mobil', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->id('id_pesan');
            $table->foreign('id_pesan')->references('id')->on('pesanan');
            $table->string('driver');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_mobil');
    }
};
