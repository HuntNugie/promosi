<?php

namespace Database\Seeders;

use App\Models\Perusahaan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PerusahaanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Perusahaan::truncate();
        Perusahaan::create([
            "nm_perusahaan" => "Ngk Company",
            "tentang" => "NGK Company adalah perusahaan yang berdedikasi dalam menyediakan solusi teknologi dan layanan digital terbaik untuk berbagai sektor industri. Berdiri sejak tahun [tahun berdiri], kami berkomitmen untuk menghadirkan inovasi, efisiensi, dan keandalan dalam setiap produk dan layanan yang kami tawarkan.",
            "slug" => "ngk-company"
        ]);
    }
}
