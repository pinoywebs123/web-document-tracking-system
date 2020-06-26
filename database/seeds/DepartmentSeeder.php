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
        Department::create(['name'=> 'CTED']);
        Department::create(['name'=> 'CBA']);
        Department::create(['name'=> 'CIT']);
        Department::create(['name'=> 'CAS']);

        Department::create(['name'=> 'CARE']);
        Department::create(['name'=> 'SUPPLY OFFICE']);
        Department::create(['name'=> 'Buildings ang Grounds']);
        Department::create(['name'=> 'ACCOUNTING']);
        Department::create(['name'=> 'CASHIER']);
        Department::create(['name'=> 'Library']);
        Department::create(['name'=> 'CCJE']);
        Department::create(['name'=> 'Registrar\'s office']);
        Department::create(['name'=> 'SAO']);
    }
}
