<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('kepala_surat', function (Blueprint $table) {
            $table->id();
            $table->string('nama_kop');
            $table->text('alamat_kop');
            $table->string('nama_tujuan');
            $table->unsignedBigInteger('id_user'); // Foreign key
            $table->timestamps();
    
            $table->foreign('id_user')->references('id')->on('users');
        });
    }
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kepalasurat');
    }
};
