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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('phone')->unique()->nullable();
            $table->string('alamat')->nullable();
            $table->enum('jabatan', ['Admin', 'NOC', 'Asisten NOC', 'Teknisi Lpngn', 'Marketing', 'Direktur'])->default('Admin');
            $table->enum('is_admin', ['Super Admin', 'Admin', 'Staff'])->default('Staff');
            $table->string('photo_profil')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
