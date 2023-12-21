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
        Schema::table('owner_data_kosts', function (Blueprint $table) {
            //
            $table->integer('diskon')->after('harga')->nullable();
            $table->json('foto_tambahan')->after('foto_dalam')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('owner_data_kosts', function (Blueprint $table) {
            //
            $table->dropColumn('diskon');
            $table->dropColumn('foto_tambahan');
        });
    }
};
