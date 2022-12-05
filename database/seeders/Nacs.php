<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Nac;

class Nacs extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            'ALCALÁ',
            'ANDALUCÍA',
            'ANSERMANUEVO',
            'ARGELIA',
            'BOLÍVAR',
            'BUENAVENTURA',
            'BUGA'
        ];

        foreach ($data as $item){
            Nac::create([
                'name' => $item
            ]);
        }

    }
}
