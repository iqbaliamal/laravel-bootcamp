<?php

namespace Database\Seeders;

use App\Models\Camp;
use GuzzleHttp\Promise\Create;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CampTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $camps = [
            [
                'title' => 'Gila Belajar',
                'slug'  => Str::slug('Gila Belajar'),
                'price' =>  280,
                // 'created_at' => date('Y-m-d H:i:s', time()),
                // 'updated_at' => date('Y-m-d H:i:s', time()),
            ],
            [
                'title' => 'Baru Mulai',
                'slug'  => Str::slug('Baru Mulai'),
                'price' =>  280,
                // 'created_at' => date('Y-m-d H:i:s', time()),
                // 'updated_at' => date('Y-m-d H:i:s', time()),
            ]
        ];

        // 1st method
        foreach ($camps as $key => $camp) {
            Camp::create($camp);
        }

        // 2nd method
        // jika menggunakan method ini (query builder, created at harus di isi, jika pakai yg 1st method tidak perlu di isi sudah otomatis terisi)
        // Camp::insert($camps);
    }
}
