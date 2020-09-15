<?php

use Illuminate\Database\Seeder;

class PositionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['name' => 'Manager Finance', 'department_id' => 1],
            ['name' => 'Staff Finance', 'department_id' => 1],
            ['name' => 'General Manager IT Engineering', 'department_id' => 2],
            ['name' => 'Manager IT Engineering', 'department_id' => 2],
            ['name' => 'Manager Administration', 'department_id' => 3],
            ['name' => 'Supervisor Administration', 'department_id' => 3],
            ['name' => 'Manager Operation', 'department_id' => 4],
            ['name' => 'Staff Operation', 'department_id' => 4]
        ];
        foreach ($data as $d) {
            DB::table('positions')->insert([
                'name' => $d['name'],
                'code' => "",
                'department_id' => $d['department_id']
            ]);
        }
    }
}
