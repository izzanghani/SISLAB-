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
    Schema::create('ruangans', function (Blueprint $table) {
        $table->id();
        $table->string('nama_ruangan');
        $table->string('nama_pic');
        $table->string('posisi_ruangan');
        $table->string('status')->default('Tersedia');
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ruangans');
    }
};
