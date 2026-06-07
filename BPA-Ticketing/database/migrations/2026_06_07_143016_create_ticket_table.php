<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('ticket', function (Blueprint $table) {
            $table->increments('ticket_id');
            $table->string('nomor_ticket', 50)->unique();
            $table->unsignedInteger('user_id');
            $table->unsignedInteger('kategori_id');
            $table->text('deskripsi');
            $table->enum('status', ['Open', 'In Progress', 'Resolved', 'Closed'])->default('Open');
            $table->dateTime('tanggal_dibuat')->useCurrent();
            $table->dateTime('tanggal_selesai')->nullable();
            $table->dateTime('created_at')->useCurrent();
            $table->dateTime('updated_at')->nullable();

            $table->foreign('user_id')
                ->references('user_id')
                ->on('user')
                ->onDelete('cascade');

            $table->foreign('kategori_id')
                ->references('kategori_id')
                ->on('kategori')
                ->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('ticket');
    }
};