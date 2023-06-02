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
             $table->string("suhu");
             $table->string("tipe");
             $table->decimal("harga", 11, 2);
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
