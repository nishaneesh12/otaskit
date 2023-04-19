<?php

namespace Database\Seeders;
use App\Models\statu;
use Illuminate\Database\Seeder;

class statusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        statu::create([
            'statuss'=>'Active',
        ]); 
        statu::create([
            'statuss'=>'Inactive',
        ]); 
    }
}
