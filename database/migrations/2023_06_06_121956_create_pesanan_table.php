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
        Schema::create('pesanan', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_produk');
            $table->foreign('id_produk')->references('id')->on('stok');
            $table->unsignedBigInteger('id_users');
            $table->foreign('id_users')->references('id')->on('users');
            $table->unsignedBigInteger('id_users_mobile');
            $table->foreign('id_users_mobile')->references('id')->on('users_mobile');
            $table->string('nama');
            $table->string('no_hp');
            $table->integer('jumlah_pesanan');
            $table->integer('total_harga');
            $table->enum('status_bayar', ['lunas', 'belum lunas']);
            // $table->timestamp('tanggal_pesanan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pesanan');
    }
};
