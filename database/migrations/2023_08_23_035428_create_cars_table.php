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
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->string('merk', 255);
            $table->string('seri', 255);
            $table->string('silinder', 100)->nullable();
            $table->string('tipe', 100)->nullable();
            $table->string('sub_tipe', 255)->nullable();
            $table->string('transmisi', 255);
            $table->integer('tahun');
            $table->string('bahan_bakar', 100);
            $table->string('penggerak', 100);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cars');
    }
};
