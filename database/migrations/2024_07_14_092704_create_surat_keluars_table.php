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
        Schema::create('surat_keluar', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_kop'); // Foreign key
            $table->date('tanggal');
            $table->string('no_surat');
            $table->string('perihal');
            $table->string('tujuan');
            $table->text('isi_surat');
            $table->unsignedBigInteger('id_tandatangan'); // Foreign key
            $table->unsignedBigInteger('id_user'); // Foreign key
            $table->timestamps();
    
            $table->foreign('id_kop')->references('id')->on('kepala_surat');
            $table->foreign('id_tandatangan')->references('id')->on('nama_tandatangan');
            $table->foreign('id_user')->references('id')->on('users');
        });
    }
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('surat_keluar');
    }
};
