<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\CulturalRight;

class Cultural_rights extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $data = [
            'Identidad y patrimonios culturales',
            'Referencias a comunidades culturales',
            'Acceso y participación en la vida cultural',
            'Educación y formación',
            'Información y comunicación',
            'Cooperación cultural'
        ];

        foreach ($data as $item){
            CulturalRight::create([
                'name' => $item
            ]);
        }

    }
}
