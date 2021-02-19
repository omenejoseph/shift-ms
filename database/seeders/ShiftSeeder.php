<?php

namespace Database\Seeders;

use App\Models\Shift;
use Illuminate\Database\Seeder;

class ShiftSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->shifts() as $shift) {
            Shift::firstOrCreate($shift);
        }
    }

    private function shifts()
    {
        return [
            [
                'name' => 'Morning',
            ],
            [
                'name' => 'Afternoon',
            ],
            [
                'name' => 'Evening',
            ]
        ];
    }
}
