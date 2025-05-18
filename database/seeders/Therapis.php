<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Therapis extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('terapis')->insert([
            ['id_user' => 1, 'spesialisasi' => 'Tukang urut', 'nomor_lisensi' => '789', 'deskripsi'
            => 'tukang urut yang sudah berpengalaman lebih dari 5 tahun', 'tarif_per_jam' => 100000, 'foto' => 'testimonial-img.jpg'],
            ['id_user' => 2, 'spesialisi' => 'Tukang kretek', 'nomor_lisensi' => '780', 'deskripsi'
            => 'tukang kretek yang yang sudah sangat berpengalaman', 'tarif_per_jam' => 150000, 'foto' => 'corousel-1.jpg'],
        ]);

        DB::table('jadwal')->insert([
            ['id_terapis' => 1, 'hari' => 'senin', 'tersedia' => true,],
            ['id_terapis' => 2, 'hari' => 'selasa', 'tersedia' => true,],
        ]);

        DB::table('janji_temu')->insert([
            ['id_user'=>1,'id_terapis'=>1,'id_jadwal'=>1,'tanggal_janji'=>'2025-01-01','keluhan'=>'sakit pinggang',
            'catatan_dokter'=>'perbanyak istirahat'],
            ['id_user'=>2,'id_terapis'=>2,'id_jadwal'=>2,'tanggal_janji'=>'2025-01-02','keluhan'=>'sakit leher',
            'catatan_dokter'=>'perbanyak tidur'],
        ]);

        DB::table('ulasan')->insert([
            ['id_janji'=>1,'id_user'=>1,'id_terapis'=>1,'rating'=>5,'komentar'=>'sangat memuaskan'],
            ['id_janji'=>2,'id_user'=>2,'id_terapis'=>2,'rating'=>4,'komentar'=>'lumayan memuaskan'],
        ]);

        DB::table('pembayaran')->insert([
            ['id_janji'=>1,'jumlah'=>200000,'metode'=>'kartu_kredit'],
            ['id_janji'=>2,'jumlah'=>150000,'metode'=>'transfer_bank']
        ]);

        DB::table('jenis_therapis')->insert([
            ['gambar'=>'service-1.jpg','jenis_therapy'=>'pijat tradisional','penjelasan'=>'pijat tradisional adalah pijat yang dilakukan dengan cara mengurut tubuh pasien dengan menggunakan tangan'],
            ['gambar'=>'service-2.jpg','jenis_therapy'=>'pijat refleksi','penjelasan'=>'pijat refleksi adalah pijat yang dilakukan dengan cara menekan titik-titik tertentu pada tubuh pasien'],
            ['gambar'=>'service-3.jpg','jenis_therapy'=>'pijat aromaterapi','penjelasan'=>'pijat aromaterapi adalah pijat yang dilakukan dengan menggunakan minyak esensial'],
            ['gambar'=>'service-4.jpg','jenis_therapy'=>'pijat hot stone','penjelasan'=>'pijat hot stone adalah pijat yang dilakukan dengan menggunakan batu panas'],
        ]);
    }
}
