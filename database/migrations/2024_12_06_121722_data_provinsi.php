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
        Schema::create('data_provinsi', function (Blueprint $table) {
            $table->id();
            $table->integer('tahun');
            $table->unsignedBigInteger('nama_data_id');
            $table->unsignedBigInteger('provinsi_id');
            $table->double('jumlah');
            $table->timestamps();
            $table->foreign('nama_data_id')->references('id')->on('nama_data');
            $table->foreign('provinsi_id')->references('id')->on('provinsi');
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_provinsi');
    }
};
