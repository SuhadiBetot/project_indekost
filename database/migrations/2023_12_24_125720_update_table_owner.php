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
            $table->string('status')->default('belum diterima');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('owner', function (Blueprint $table) {
            //
            $table->dropColumn('status');
        });
    }
};
