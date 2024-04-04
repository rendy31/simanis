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
        Schema::create('barangs', function (Blueprint $table) {
            $table->id();
            $table->string('kategori_id');
            $table->string('namaBarang');
            $table->string('tglBeli');
            $table->string('jlhBeli');
            $table->string('hargaSatuan');
            $table->string('totalHarga');
            $table->string('tempatBeli');
            $table->string('asalBarang');
            $table->string('kapemilikan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('barangs');
    }
};
