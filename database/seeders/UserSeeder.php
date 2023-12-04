<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'guard_id' => '00001',
                'first_name' => 'NETPERFORMERS',
                'last_name' => 'Administrator',
                'email' => 'support@netperformers.de',
                'password' => Hash::make('foobar', ['rounds' => 12]),
                'is_staff' => 1,
                'timezone' => 'Europe/Berlin'
            ],
            [
                'guard_id' => '00002',
                'first_name' => 'Max',
                'last_name' => 'Mustermann',
                'email' => 'mustermann@example.com',
                'password' => Hash::make('foobar', ['rounds' => 12]),
                'is_staff' => 0,
                'timezone' => null
            ],
        ]);
    }
}
