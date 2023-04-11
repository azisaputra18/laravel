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
        Schema::create('reseps', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('no_resep');
            $table->date('tgl_resep');
            $table->string('nama_passien');
            $table->string('nama_dokter');
            $table->string('obat_resep');
            $table->integer('jumlah_obatresep');
          
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reseps');
    }
};
