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
        Schema::create('lm__barangs', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_m_barang')->unsigned();
            $table->foreign('id_m_barang')->references('id')->on('m__barangs')->ondelete('cascade');
            $table->string('tanggal_selesai');
            $table->string('keterangan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lm__barangs');
    }
};
