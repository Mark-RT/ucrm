<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmployeeTableSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('employee')->insert([
            ['employee_id' => 1, 'employee_name' => 'Ivan Petrenko'],
            ['employee_id' => 2, 'employee_name' => 'Olena Kravchenko'],
            ['employee_id' => 3, 'employee_name' => 'Taras Shevchenko'],
        ]);
    }
}
