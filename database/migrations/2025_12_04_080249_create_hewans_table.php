<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('hewans', function (Blueprint $table) {
            $table->id();
            $table->string('nama_hewan'); // bebas, penting konsisten
            $table->integer('umur')->nullable();

            $table->foreignId('jenis_id')
                ->constrained('jenis_hewans')
                ->onUpdate('cascade')
                ->onDelete('cascade');

            $table->foreignId('pemilik_id')
                ->constrained('pemiliks')   // sesuaikan dengan nama tabel aslinya
                ->onUpdate('cascade')
                ->onDelete('cascade');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('hewans');
    }
};
