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
            'id' => 9,
            'code' => 'M',
            'name' => 'Matematika dan Ilmu Pengetahuan Alam',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('departments')->insert([
            'facultyId' => 9,
            'name' => 'Informatika',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('degrees')->insert([
            'name' => 'S1',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('degrees')->insert([
            'name' => 'S2',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('degrees')->insert([
            'name' => 'S3',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('degrees')->insert([
            'name' => 'S1',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('degrees')->insert([
            'name' => 'D2',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('degrees')->insert([
            'name' => 'D3',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('degrees')->insert([
            'name' => 'D4',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('users')->insert([
            'departmentId' => 1,
            'degreeId' => 1,
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
            'departmentId' => 1,
            'degreeId' => 2,
            'nim' => 'M0517002',
            'name' => 'Ahmad Sabilil Maromi',
            'years' => 2017,
            'birthdate' => '1999-04-12',
            'city' => 'Jepara',
            'password' => Hash::make('475869'),
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('users')->insert([
            'departmentId' => 1,
            'degreeId' => 3,
            'nim' => 'M0517003',
            'name' => 'Ahmad Sabilil Maromi',
            'years' => 2017,
            'birthdate' => '1999-04-12',
            'city' => 'Jepara',
            'password' => Hash::make('475869'),
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('users')->insert([
            'departmentId' => 1,
            'degreeId' => 4,
            'nim' => 'M0517004',
            'name' => 'Ahmad Sabilil Maromi',
            'years' => 2017,
            'birthdate' => '1999-04-12',
            'city' => 'Jepara',
            'password' => Hash::make('475869'),
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('users')->insert([
            'departmentId' => 1,
            'degreeId' => 5,
            'nim' => 'M0517005',
            'name' => 'Ahmad Sabilil Maromi',
            'years' => 2017,
            'birthdate' => '1999-04-12',
            'city' => 'Jepara',
            'password' => Hash::make('475869'),
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('users')->insert([
            'departmentId' => 1,
            'degreeId' => 6,
            'nim' => 'M0517006',
            'name' => 'Ahmad Sabilil Maromi',
            'years' => 2017,
            'birthdate' => '1999-04-12',
            'city' => 'Jepara',
            'password' => Hash::make('475869'),
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('users')->insert([
            'departmentId' => 1,
            'degreeId' => 7,
            'nim' => 'M0517007',
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
