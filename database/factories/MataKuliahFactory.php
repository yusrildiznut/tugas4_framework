<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Factory as Faker;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\MataKuliah>
 */
class MataKuliahFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $matakuliah = ["Algoritma dan Pemrograman", "Struktur Data", "Basis Data", "Pemrograman Berorientasi Objek", "Jaringan Komputer", "Pemrograman Berbasis Web", "Sistem Operasi", "Pemrograman Berbasis Mobile", "Data Mining", "Framework Pemrograman Web", "Machine Learning", "Pengolahan Citra Digital", "Pemrograman Berbasis Mobile", "Pengolahan Citra Digital", "Pengenalan Algoritma dan Pemrograman", "Pengenalan Basis Data", "Algoritma dan Struktur Data", "Statistika dan Probabilitas", "Fisika Dasar", "Sistem Informasi Akuntansi dan Keuangan", "Jaringan dan Keamanan Sistem", "Pemrograman Perangkat Bergerak", "Komputasi Awan", "Pemrograman Animasi dan Multimedia"];
        $faker = Faker::create();
        return [
            'kode_mk' => $faker -> unique() -> numerify('IF###'),
            'nama_mk' => $faker -> randomElement($matakuliah),
            'sks' => $faker -> numberBetween(1,4),
            'nama_dosen' => $faker -> name()
        ];
    }
}
