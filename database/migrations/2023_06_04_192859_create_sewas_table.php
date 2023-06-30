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
        Schema::create('sewas', function (Blueprint $table) {
            $table->id()->startingValue(20);
            $table->foreignId('user_id');
            $table->foreignId('gk_id')->nullable();
            $table->string('nama_toko');
            $table->text('alamat_toko');
            $table->text('lokasi_pengambilan');
            $table->string('total_berat');
            $table->string('tipe_barang');
            $table->date('tanggal_pengambilan');
            $table->date('tgl_byr')->nullable();
            $table->enum('status' , ['belum dibayar' , 'lunas']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sewas');
    }
};
