<?php

use Illuminate\Database\Seeder;

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
            'departmentId' => 2,
            'nim' => 'M0517001',
            'name' => 'Ahmad Sabilil Maromi',
            'years' => 2017,
            'birthdate' => '1999-04-12',
            'city' => 'Jepara',
            'password' => Hash::make('475869'),
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('users')->insert([
            'departmentId' => 2,
            'nim' => 'E0020004',
            'name' => 'Adam Ilham Fabian',
            'years' => 2020,
            'birthdate' => '2002-05-05',
            'city' => 'Wonogiri',
            'password' => Hash::make('475869'),
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('users')->insert([
            'departmentId' => 1,
            'nim' => 'M0517002',
            'name' => 'Ahmad Sabilil Maromi',
            'years' => 2017,
            'birthdate' => '1999-04-12',
            'city' => 'Jepara',
            'password' => Hash::make('475869'),
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
    }
}
