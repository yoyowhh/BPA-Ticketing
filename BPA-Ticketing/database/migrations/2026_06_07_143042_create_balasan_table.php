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
            $table->unsignedInteger('admin_id');
            $table->text('pesan');
            $table->dateTime('created_at')->useCurrent();

            $table->foreign('ticket_id')
                ->references('ticket_id')
                ->on('ticket')
                ->onDelete('cascade');

            $table->foreign('admin_id')
                ->references('admin_id')
                ->on('admin')
                ->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('balasan');
    }
};