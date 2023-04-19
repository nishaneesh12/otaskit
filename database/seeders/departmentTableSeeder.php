<?php

namespace Database\Seeders;
use App\Models\department;
use Illuminate\Database\Seeder;

class departmentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        department::create([
            'department'=>'Sales',
        ]); 
        department::create([
            'department'=>'IT',
        ]); 
        department::create([
            'department'=>'Marketing',
        ]); 
    }
}
