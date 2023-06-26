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
            $table->id();
            $table->foreignId('user_id');
            $table->foreignId('gk_id')->nullable();
            $table->string('nama_toko');
            $table->text('alamat_toko');
            $table->text('lokasi_pengambilan');
            $table->string('total_berat');
            $table->string('tipe_barang');
            $table->date('tanggal_pengambilan');
            $table->enum('status' , ['Unpaid' , 'Paid']);
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
