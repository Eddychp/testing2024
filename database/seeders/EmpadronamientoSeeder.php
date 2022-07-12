<?php

namespace Database\Seeders;

use App\Models\Empadronamieto;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EmpadronamientoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Empadronamieto::create([
            'partner_id'=>1,
            'stand_id'=>1,
            'period_id'=>3,
        ]);
        Empadronamieto::create([
            'partner_id'=>2,
            'stand_id'=>2,
            'period_id'=>3,
        ]);
        Empadronamieto::create([
            'partner_id'=>3,
            'stand_id'=>3,
            'period_id'=>3,
        ]);

    }
}
