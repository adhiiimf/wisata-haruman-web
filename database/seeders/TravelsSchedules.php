<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\TravelSchedule;

class TravelsSchedules extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    
    public function run()
    {
        $scheduleData = array('Senin - Jumat', 'Sabtu - Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu', 'Minggu');
        foreach ($scheduleData as $value) {
            TravelSchedule::create([
                'name' => $value,
            ]);
        }
    }
}
