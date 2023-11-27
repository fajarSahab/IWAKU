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
        Schema::create('kategoripembayaran', function (Blueprint $table) {
            $table->string('IDkategori', 11)->primary();
            $table->string('Kategori', 15);
            $table->integer('Nominal');
        });
    }

    public function down()
    {
        Schema::dropIfExists('kategoripembayaran');
    }
};
