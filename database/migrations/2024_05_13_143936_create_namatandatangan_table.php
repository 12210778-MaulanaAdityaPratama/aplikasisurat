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
    Schema::create('nama_tandatangan', function (Blueprint $table) {
        $table->id();
        $table->string('nama_tandatangan');
        $table->string('jabatan');
        $table->string('nip')->unique();
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
        Schema::dropIfExists('namatandatangan');
    }
};