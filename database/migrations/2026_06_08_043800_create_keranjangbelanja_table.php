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
        Schema::dropIfExists('keranjangbelanja');

        Schema::create('keranjangbelanja', function (Blueprint $table) {
        $table->increments('ID');
        $table->integer('KodeBarang');
        $table->integer('Jumlah');
        $table->integer('Harga');
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('keranjangbelanja');
    }
};
