<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\support\Facades\DB;

class DataKejadianSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * 
     * @return void
     */
    public function run(): void
    {
        //
        DB::table('datakejadian')->insert([
            [   
                'nama_kejadian' => 'Kebakaran Rumah',
                'tanggal_kejadian' => '2024-09-10',
                'alamat_kejadian' => 'Sindangratu Kec.Wanaraja',
                'deskripsi_kejadian' => 'disebabkan oleh korsleting listrik',
            ],
            [
                'nama_kejadian' => 'Kebakaran Lahan',
                'tanggal_kejadian' => '2024-09-09',
                'alamat_kejadian' => 'Ngamplang Kec.Cilawu',
                'deskripsi_kejadian' => 'disebabkan oleh korsleting listrik',
            ],
            [
                'nama_kejadian' => 'Evakuasi Ular',
                'tanggal_kejadian' => '2024-09-18',
                'alamat_kejadian' => 'Cihikeu Kec.Bungbulang',
                'deskripsi_kejadian' => 'disebabkan oleh korsleting listrik',
            ],


        ]);
    }
}
