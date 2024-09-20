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
        Schema::create('penjualans', function (Blueprint $table) {
            $table->id();
            $table->string('nama_pemesan');
            $table->string('telp');
            $table->string('alamat');
            $table->string('keberangkatan');
            $table->string('tujuan');
            $table->dateTime('tgl_berangkat');
            $table->dateTime('tgl_sampai');
            $table->date('tgl_pemesanan');
            $table->string('nomor_tiket')->unique();
            $table->integer('harga');
            $table->enum('status_pembayaran', allowed: ['sudah bayar', 'belum dibayar'])->default('belum dibayar');
            $table->enum('jenis_pembayaran', ['transfer', 'cash'])->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('penjualans');
    }
};
