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
        DB::table('faculties')->insert([
            'code' => 'M',
            'name' => 'Matematika dan Ilmu Pengetahuan Alam'
        ]);

        DB::table('departments')->insert([
            'facultyId' => 1,
            'name' => 'Informatika'
        ]);

        DB::table('degrees')->insert([
            'name' => 'S1'
        ]);

        DB::table('users')->insert([
            'departmentId' => 1,
            'degreeId' => 1,
            'nim' => 'M0517004',
            'name' => 'Ahmad Sabilil Maromi',
            'years' => 2017,
            'birthdate' => '1999-04-12',
            'city' => 'Jepara',
            'password' => Hash::make('475869'),
        ]);
    }
}
