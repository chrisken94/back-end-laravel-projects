<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            DepartmentsTableSeeder::class,
            PositionsTableSeeder::class,
            EmployeesTableSeeder::class,
            InventoriesTableSeeder::class,
            ArchivesTableSeeder::class,
            EmployeeInventoryTableSeeder::class
        ]);
    }
}
