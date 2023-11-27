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
        Schema::create('recap_pembayaran', function (Blueprint $table) {
            $table->bigIncrements('IDpembayaran');
            $table->string('id', 20);
            $table->string('IDkategori', 20);
            $table->string('Username_ptgs', 11);
            $table->string('Metode_byr', 11);
            $table->timestamp('TanggalBayar')->useCurrent();
            $table->string('PembayaranBulan', 11);
            $table->integer('nominal');
            $table->string('tahun', 50)->nullable();

            $table->foreign('id')->references('id')->on('warga');
            $table->foreign('Username_ptgs')->references('Username_ptgs')->on('petugas');
            $table->foreign('IDkategori')->references('IDkategori')->on('kategoripembayaran');
        });
    }

    public function down()
    {
        Schema::dropIfExists('recap_pembayaran');
    }
};
