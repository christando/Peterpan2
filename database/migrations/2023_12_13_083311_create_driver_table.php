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
        Schema::create('driver', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('id_driver');
            $table->foreign('id_driver')->references('id')->on('users');
            $table->string('name');
            $table->string('sim')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('driver');
    }
};
