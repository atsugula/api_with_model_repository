<?php

namespace Database\Seeders;

use App\Models\Monitor;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Monitors extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            'Karen lopez',
            'Alberto romero',
            'Elvia tulia',
        ];

        foreach ($data as $item){
            Monitor::create([
                'name' => $item
            ]);
        }
    }
}
