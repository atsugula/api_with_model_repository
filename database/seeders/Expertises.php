<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Expertise;

class Expertises extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            'Artes plásticas',
            'Teatro',
            'Música',
            'Danza',
            'Cocina tradicional',
            'Juegos tradicionales',
            'Promoción de lectura',
        ];

        foreach ($data as $item){
            Expertise::create([
                'name' => $item
            ]);
        }

    }
}
