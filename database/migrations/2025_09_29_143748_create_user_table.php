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
    Schema::create('user', function (Blueprint $table) {
        $table->id();
        $table->string('nama');
        $table->string('nim')->unique();
        $table->unsignedBigInteger('kelas_id');
        $table->timestamps();

        $table->foreign('kelas_id')->references('id')->on('kelas')->onDelete('cascade');
    });
}

public function down()
{
    Schema::dropIfExists('user');
}

};
