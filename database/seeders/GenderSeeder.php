<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GenderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('genders')->insert([
            [
                'name' => 'Männlich',
                'salutation' => 'general.male.salutation'
            ],
            [
                'name' => 'Weiblich',
                'salutation' => 'general.female.salutation'
            ],
            [
                'name' => 'Divers',
                'salutation' => 'general.diverse.salutation'
            ]
        ]);
    }
}
