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
        Schema::create('finger_accesses', function (Blueprint $table) {
            $table->id();
            $table->string('unit');           // contoh: "GBB Penicillin"
            $table->string('kode_ruangan');   // contoh: "R.135A"
            $table->string('nama_ruangan')->nullable();
            $table->string('ip_address')->nullable();
            $table->string('status')->default('unknown'); // online / offline / unknown
            $table->timestamp('last_checked_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('finger_accesses');
    }
};
