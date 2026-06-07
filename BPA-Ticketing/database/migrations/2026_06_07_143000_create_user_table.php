<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('user', function (Blueprint $table) {
            $table->increments('user_id');
            $table->string('nama_lengkap', 100);
            $table->string('nim_nip', 30);
            $table->enum('status', ['Mahasiswa', 'Dosen', 'Pegawai']);
            $table->string('prodi_unit', 100);
            $table->string('email', 100)->unique();
            $table->string('password', 255)->nullable();
            $table->dateTime('created_at')->useCurrent();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('user');
    }
};