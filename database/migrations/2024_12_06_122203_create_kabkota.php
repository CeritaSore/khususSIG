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
        Schema::create('data_kabkota', function (Blueprint $table) {
            $table->id();
            $table->double('tahun');
            $table->unsignedBigInteger('nama_data_id');
            $table->unsignedBigInteger('kabkota_id');
            $table->foreign('nama_data_id')->references('id')->on('nama_data');
            $table->foreign('kabkota_id')->references('id')->on('kabkota');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_kabkota');
    }
};
