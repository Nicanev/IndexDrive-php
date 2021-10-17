<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CarsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cars')->insert([
            [
                'mark' => 'Toyota',
                'title' => 'Prado',
                'car_number' => 'A228AA',
                'branch_id' => 1,
                'price' => 6000,
                'IsFree' => true
            ],
            [
                'mark' => 'Toyota',
                'title' => 'Camry',
                'car_number' => 'A666AA',
                'branch_id' => 2,
                'price' => 10000,
                'IsFree' => true
            ],
            [
                'mark' => 'Honda',
                'title' => 'Accord',
                'car_number' => 'A228BB',
                'branch_id' => 3,
                'price' => 6000,
                'IsFree' => true
            ],
            [
                'mark' => 'Lada',
                'title' => 'Priora',
                'car_number' => 'A005AA',
                'branch_id' => 1,
                'price' => 5000,
                'IsFree' => true
            ],
            [
                'mark' => 'Toyota',
                'title' => 'Mark II',
                'car_number' => 'A115AA',
                'branch_id' => 1,
                'price' => 3000,
                'IsFree' => true
            ],
        ]);
    }
}
