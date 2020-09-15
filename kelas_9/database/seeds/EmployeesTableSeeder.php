<?php

use Illuminate\Database\Seeder;

class EmployeesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // insert banyak data
        $data = [
            ['name' => 'Heru', 'position_id' => 1],
            ['name' => 'Yoga', 'position_id' => 2],
            ['name' => 'Andriani', 'position_id' => 3],
            ['name' => 'Fachrul', 'position_id' => 5],
            ['name' => 'Maria', 'position_id' => 8],
            ['name' => 'Zulia', 'position_id' => 4],
            ['name' => 'Stefanus', 'position_id' => 6],
            ['name' => 'Darmin', 'position_id' => 7]
        ];
        foreach ($data as $d) {
            DB::table('employees')->insert([
                'position_id' => $d['position_id'],
                'name' => $d['name'],
                'address' => "",
                'email' => ""
            ]);
        }
    }
}
