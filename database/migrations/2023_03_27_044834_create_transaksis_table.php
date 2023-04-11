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
        Schema::create('transaksis', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('no_transaksi');
            $table->string('tgl_transaksi');
            $table->string('nama_transaksi');
            $table->string('total_bayar');
            $table->foreignId('obat_id')->constrained();
            $table->foreignId('resep_id')->constrained();
        
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaksis');
    }
};
