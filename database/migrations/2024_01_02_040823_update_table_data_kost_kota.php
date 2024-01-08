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
            $table->enum('tipe_kost', ['laki-laki', 'perempuan', 'campur']);
            $table->enum('kecamatan', [
                "Ampelgading",
                "Bantur",
                "Bululawang",
                "Dampit",
                "Dau",
                "Donomulyo",
                "Gedangan",
                "Gondanglegi",
                "Jabung",
                "Kalipare",
                "Karangploso",
                "Kasembon",
                "Kepanjen",
                "Kromengan",
                "Lawang",
                "Ngajum",
                "Ngantang",
                "Pagak",
                "Pagelaran",
                "Pakis",
                "Pakisaji",
                "Poncokusumo",
                "Pujon",
                "Singosari",
                "Sumbermanjing Wetan",
                "Sumberpucung",
                "Tajinan",
                "Tirtoyudo",
                "Tumpang",
                "Turen",
                "Wagir",
                "Wajak",
                "Wonosari"
            ]);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('owner_data_kosts', function (Blueprint $table) {
            //
            $table->dropColumn('tipe_kost');
            $table->dropColumn('kecamatan');
        });
    }
};
