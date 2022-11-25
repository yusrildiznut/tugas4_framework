<?php

namespace Database\Seeders;

use App\Models\MataKuliah;
use Database\Factories\MataKuliahFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MataKuliahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\MataKuliah::factory()->count(24)->create();
    }
}
