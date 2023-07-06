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
         Schema::create('gudang_khususes', function (Blueprint $table) {
             $table->id();
             $table->string("lokasi");
             $table->string("nama");
             $table->string("slug");
             $table->string("gambar");
             $table->foreignId("tipe_gk_id");
             $table->string("luas");
             $table->integer("total_ruangan");
             $table->string("suhu");
             $table->integer("harga_sewa");
             $table->timestamps();
         });
     }
 
     /**
      * Reverse the migrations.
      */
     public function down(): void
     {
         Schema::dropIfExists('gudang_khususes');
     }
};
