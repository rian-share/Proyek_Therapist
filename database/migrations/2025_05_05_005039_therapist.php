<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void

    {

        Schema::create('terapis', function (Blueprint $table) {
            $table->id('id');
            $table->foreignId('id_user')->constrained('users')->onDelete('cascade');
            $table->string('spesialisasi')->nullable(); // Contoh: "Psikolog Klinis"
            $table->string('nomor_lisensi')->nullable(); // STR/SIPP
            $table->text('deskripsi')->nullable(); // Biodata singkat
            $table->decimal('tarif_per_jam', 10, 2)->nullable(); // Contoh: 150000.00
            $table->string('foto');
            $table->timestamps();
        });

        Schema::create('jadwal', function (Blueprint $table) {
            $table->id('id');
            $table->foreignId('id_terapis')->constrained('terapis')->onDelete('cascade');
            $table->enum('hari', ['senin', 'selasa', 'rabu', 'kamis', 'jumat', 'sabtu', 'minggu']);
            $table->boolean('tersedia')->default(true);
            $table->timestamps();
        });

        Schema::create('janji_temu', function (Blueprint $table) {
            $table->id('id');
            $table->foreignId('id_user')->constrained('users')->onDelete('cascade'); // Pasien
            $table->foreignId('id_terapis')->constrained('terapis')->onDelete('cascade');
            $table->foreignId('id_jadwal')->constrained('jadwal')->onDelete('cascade');
            $table->date('tanggal_janji');
            $table->enum('status', ['menunggu', 'dikonfirmasi', 'selesai', 'dibatalkan'])->default('menunggu');
            $table->text('keluhan')->nullable(); // Keluhan pasien
            $table->text('catatan_dokter')->nullable(); // Catatan terapis
            $table->timestamps();
        });

        Schema::create('ulasan', function (Blueprint $table) {
            $table->id('id');
            $table->foreignId('id_janji')->constrained('janji_temu')->onDelete('cascade');
            $table->foreignId('id_user')->constrained('users')->onDelete('cascade'); // Pasien
            $table->foreignId('id_terapis')->constrained('terapis')->onDelete('cascade');
            $table->integer('rating')->unsigned()->checkBetween(1, 5); // 1-5 bintang
            $table->text('komentar')->nullable();
            $table->timestamps();
        });


        Schema::create('pembayaran', function (Blueprint $table) {
            $table->id('id');
            $table->foreignId('id_janji')->constrained('janji_temu')->onDelete('cascade');
            $table->decimal('jumlah', 10, 2); // Contoh: 200000.00
            $table->enum('metode', ['tunai', 'kartu_kredit', 'transfer_bank', 'e_wallet']);
            $table->enum('status', ['menunggu', 'lunas', 'gagal'])->default('menunggu');
            $table->string('bukti_pembayaran')->nullable(); // Path gambar
            $table->timestamps();
        });

        Schema::create('jenis_therapy', function (Blueprint $table) {
            $table->id('id');
            $table->string('gambar');
            $table->string('jenis_therapy');
            $table->text('penjelasan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {

        Schema::dropIfExists('terapis');
        Schema::dropIfExists('jadwal');
        Schema::dropIfExists('janji_tamu');
        Schema::dropIfExists('ulasan');
        Schema::dropIfExists('pembayaran');
        Schema::dropIfExists('jenis_therapy');
    }
};
