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
        Schema::create('tiket_kapals', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('slug');
            $table->text('image');
            $table->string('keberangkatan');
            $table->string('tujuan');
            $table->dateTime('waktu_keberangkatan');
            $table->dateTime('waktu_kedatangan');
            $table->text('deskripsi')->nullable();
            $table->dateTime('expired');
            $table->integer('views')->default(0);
            $table->enum('status', ['active','expired']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tiket_kapals');
    }
};
