<?php

use Illuminate\Database\Seeder;
use App\Department;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Department::create(['name'=> 'CAS']);
        Department::create(['name'=> 'Director']);
        Department::create(['name'=> 'Cashier']);
        Department::create(['name'=> 'Registrar']);
    }
}
