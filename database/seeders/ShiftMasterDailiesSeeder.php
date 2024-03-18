<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use DB;

class ShiftMasterDailiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        $used_weekdays = [];
        foreach (range(1, 8) as $index) {
            $week_day = $faker->randomElement(['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday']);
            while(in_array($week_day,$used_weekdays))
            {
                $week_day = $faker->randomElement(['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday']);
            }
            $used_weekdays[] = $week_day;
            $data = ['G','A','B','Night'];
            $shift = $data[array_rand($data)];
            $data2 = [];
            switch($shift){
                case 'G':
                {
                    array_push($data2,'General shift');
                    break;
                }
                case 'A':
                {
                    array_push($data2,'Morning shift');
                    break;
                }
                case'B':
                {
                    array_push($data2,'Afternoon shift');
                    break;
                }
                case'Night':
                {
                    array_push($data2,'Night shift');
                    break;
                }
            }
        
            DB::table('shift_master_dailies')->insert([
                'week_day' => $week_day,
                'shift_code' => $shift,
                'shift_time' => '9:00',
                'shift_name' => implode(',',$data2),
                'time_zone' => $faker->timezone,
                'Shift_in' => $faker->time('H:i'),
                'Shift_out' => $faker->time('H:i'),
                'Lunch_in' => $faker->time('H:i'),
                'Lunch_out' => $faker->time('H:i'),
                'ded_full_lunch_hrs' => $faker->randomFloat(2, 0, 3),
                'extraday_hrs' => $faker->randomFloat(2, 0, 5),
                'Send_sms_delay' => $faker->numberBetween(0, 60),
                'department_id' => 19,
                'user_id' => 99,
                'comapny_id' => 38,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
