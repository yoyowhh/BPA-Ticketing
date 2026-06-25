<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
{
    Schema::create('balasan', function (Blueprint $table) {
        $table->increments('balasan_id');
        $table->unsignedInteger('ticket_id');
        // Keduanya nullable karena balasan hanya diisi salah satu
        $table->unsignedInteger('admin_id')->nullable();
        $table->unsignedInteger('user_id')->nullable();
        $table->text('pesan');
        $table->dateTime('created_at')->useCurrent();

        $table->foreign('ticket_id')->references('ticket_id')->on('ticket')->onDelete('cascade');
        $table->foreign('admin_id')->references('admin_id')->on('admin')->onDelete('cascade');
        $table->foreign('user_id')->references('user_id')->on('user')->onDelete('cascade');
    });
}

    public function down(): void
    {
        Schema::dropIfExists('balasan');
    }
};
