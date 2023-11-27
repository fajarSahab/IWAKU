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
        Schema::create('warga', function (Blueprint $table) {
            $table->string('id', 20)->primary();
            $table->string('nama', 50);
            $table->string('alamat', 11);
            $table->string('status', 11);
        });
    }

    public function down()
    {
        Schema::dropIfExists('warga');
    }
};
