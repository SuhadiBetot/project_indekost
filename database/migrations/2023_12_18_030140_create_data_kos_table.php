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
        Schema::create('owner_data_kosts', function (Blueprint $table) {
            $table->id();
            $table->string('nama_kost');
            $table->text('ketentuan');
            $table->text('lokasi');
            $table->text('peraturan');
            $table->text('spesifikasi');
            $table->integer('harga');
            $table->json('fasilitas_kamar');
            $table->text('fasilitas_kamar_mandi');
            $table->text('fasilitas_tempat_parkir');
            $table->string('foto_depan');
            $table->string('foto_dalam');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('owner_data_kosts');
    }
};
