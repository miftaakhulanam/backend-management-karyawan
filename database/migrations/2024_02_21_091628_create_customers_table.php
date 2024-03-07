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
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('id_customer')->unique();
            $table->string('username');
            $table->bigInteger('nik')->unique();
            $table->string('phone');
            $table->string('wifi_password')->nullable();
            $table->string('koordinat')->nullable();
            $table->string('kota');
            $table->string('kecamatan');
            $table->string('desa');
            $table->string('photo_ktp')->nullable();
            $table->string('photo_rumah')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};
