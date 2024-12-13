<?php

namespace Database\Seeders;

use App\Models\Provinsi;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProvinsiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('provinsi')->insert([
            ['id' => 11, 'nama' => 'ACEH', 'alt_nama' => 'ACEH', 'latitude' => 4.368550, 'longitude' => 97.025300],
            ['id' => 12, 'nama' => 'SUMATERA UTARA', 'alt_nama' => 'SUMATERA UTARA', 'latitude' => 2.192350, 'longitude' => 99.381220],
            ['id' => 13, 'nama' => 'SUMATERA BARAT', 'alt_nama' => 'SUMATERA BARAT', 'latitude' => -1.342250, 'longitude' => 100.076100],
            ['id' => 14, 'nama' => 'RIAU', 'alt_nama' => 'RIAU', 'latitude' => 0.500410, 'longitude' => 101.547580],
            ['id' => 15, 'nama' => 'JAMBI', 'alt_nama' => 'JAMBI', 'latitude' => -1.611570, 'longitude' => 102.779700],
            ['id' => 16, 'nama' => 'SUMATERA SELATAN', 'alt_nama' => 'SUMATERA SELATAN', 'latitude' => -3.126680, 'longitude' => 104.093060],
            ['id' => 17, 'nama' => 'BENGKULU', 'alt_nama' => 'BENGKULU', 'latitude' => -3.518680, 'longitude' => 102.535980],
            ['id' => 18, 'nama' => 'LAMPUNG', 'alt_nama' => 'LAMPUNG', 'latitude' => -4.855500, 'longitude' => 105.027300],
            ['id' => 19, 'nama' => 'KEPULAUAN BANGKA BELITUNG', 'alt_nama' => 'KEPULAUAN BANGKA BELITUNG', 'latitude' => -2.757750, 'longitude' => 107.583940],
            ['id' => 21, 'nama' => 'KEPULAUAN RIAU', 'alt_nama' => 'KEPULAUAN RIAU', 'latitude' => -0.154780, 'longitude' => 104.580370],
            ['id' => 31, 'nama' => 'DKI JAKARTA', 'alt_nama' => 'DKI JAKARTA', 'latitude' => 6.174500, 'longitude' => 106.822700],
            ['id' => 32, 'nama' => 'JAWA BARAT', 'alt_nama' => 'JAWA BARAT', 'latitude' => -6.889170, 'longitude' => 107.640470],
            ['id' => 33, 'nama' => 'JAWA TENGAH', 'alt_nama' => 'JAWA TENGAH', 'latitude' => -7.303240, 'longitude' => 110.004410],
            ['id' => 34, 'nama' => 'DI YOGYAKARTA', 'alt_nama' => 'DI YOGYAKARTA', 'latitude' => 7.795600, 'longitude' => 110.369500],
            ['id' => 35, 'nama' => 'JAWA TIMUR', 'alt_nama' => 'JAWA TIMUR', 'latitude' => -6.968510, 'longitude' => 113.980050],
            ['id' => 36, 'nama' => 'BANTEN', 'alt_nama' => 'BANTEN', 'latitude' => -6.445380, 'longitude' => 106.137560],
            ['id' => 51, 'nama' => 'BALI', 'alt_nama' => 'BALI', 'latitude' => -8.235660, 'longitude' => 115.122390],
            ['id' => 52, 'nama' => 'NUSA TENGGARA BARAT', 'alt_nama' => 'NUSA TENGGARA BARAT', 'latitude' => -8.121790, 'longitude' => 117.636960],
            ['id' => 53, 'nama' => 'NUSA TENGGARA TIMUR', 'alt_nama' => 'NUSA TENGGARA TIMUR', 'latitude' => -8.565680, 'longitude' => 120.697860],
            ['id' => 61, 'nama' => 'KALIMANTAN BARAT', 'alt_nama' => 'KALIMANTAN BARAT', 'latitude' => -0.132240, 'longitude' => 111.096890],
            ['id' => 62, 'nama' => 'KALIMANTAN TENGAH', 'alt_nama' => 'KALIMANTAN TENGAH', 'latitude' => -1.499580, 'longitude' => 113.290330],
            ['id' => 63, 'nama' => 'KALIMANTAN SELATAN', 'alt_nama' => 'KALIMANTAN SELATAN', 'latitude' => -2.943480, 'longitude' => 115.375650],
            ['id' => 64, 'nama' => 'KALIMANTAN TIMUR', 'alt_nama' => 'KALIMANTAN TIMUR', 'latitude' => 0.788440, 'longitude' => 116.242000],
            ['id' => 65, 'nama' => 'KALIMANTAN UTARA', 'alt_nama' => 'KALIMANTAN UTARA', 'latitude' => 2.725940, 'longitude' => 116.911000],
            ['id' => 71, 'nama' => 'SULAWESI UTARA', 'alt_nama' => 'SULAWESI UTARA', 'latitude' => 0.655570, 'longitude' => 124.090150],
            ['id' => 72, 'nama' => 'SULAWESI TENGAH', 'alt_nama' => 'SULAWESI TENGAH', 'latitude' => -1.693780, 'longitude' => 120.808860],
            ['id' => 73, 'nama' => 'SULAWESI SELATAN', 'alt_nama' => 'SULAWESI SELATAN', 'latitude' => -3.644670, 'longitude' => 119.947190],
            ['id' => 74, 'nama' => 'SULAWESI TENGGARA', 'alt_nama' => 'SULAWESI TENGGARA', 'latitude' => -3.549120, 'longitude' => 121.727960],
            ['id' => 75, 'nama' => 'GORONTALO', 'alt_nama' => 'GORONTALO', 'latitude' => 0.718620, 'longitude' => 122.455590],
            ['id' => 76, 'nama' => 'SULAWESI BARAT', 'alt_nama' => 'SULAWESI BARAT', 'latitude' => -2.497450, 'longitude' => 119.391900],
            ['id' => 81, 'nama' => 'MALUKU', 'alt_nama' => 'MALUKU', 'latitude' => -3.118840, 'longitude' => 129.420780],
            ['id' => 82, 'nama' => 'MALUKU UTARA', 'alt_nama' => 'MALUKU UTARA', 'latitude' => 0.630120, 'longitude' => 127.972020],
            ['id' => 91, 'nama' => 'PAPUA BARAT', 'alt_nama' => 'PAPUA BARAT', 'latitude' => -1.384240, 'longitude' => 132.902530],
            ['id' => 94, 'nama' => 'PAPUA', 'alt_nama' => 'PAPUA', 'latitude' => -3.988570, 'longitude' => 138.348530],
        ]);
    }
}
