<?php

use App\Models\OwnerDataKosts;
use App\Models\User;
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
        Schema::create('sewa', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(User::class);
            $table->foreignIdFor(OwnerDataKosts::class);
            $table->date('mulai_kos');
            $table->enum('bulan', ['1', '6', '12']);
            $table->string('status')->default('pending');
            $table->string('snap_token')->nullable();
            $table->string('total_pembayaran')->nullable();
            $table->string('pendapatan_owner')->nullable();
            $table->string('pendapatan_admin')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sewa');
    }
};
