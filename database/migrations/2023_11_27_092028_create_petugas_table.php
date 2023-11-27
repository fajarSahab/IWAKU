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
        Schema::create('petugas', function (Blueprint $table) {
            $table->string('Username_ptgs', 200)->primary();
            $table->string('password', 15);
            $table->string('NamaPetugas', 30);
            $table->string('role', 10)->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('petugas');
    }
};
