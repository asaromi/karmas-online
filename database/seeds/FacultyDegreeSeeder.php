<?php

use Illuminate\Database\Seeder;

class FacultyDegreeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('faculties')->insert([ //1
            'code' => 'C',
            'name' => 'Seni Rupa dan Desain',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('faculties')->insert([ //2
            'code' => 'D',
            'name' => 'Ilmu Sosial dan Ilmu Politik',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('faculties')->insert([ //3
            'code' => 'E',
            'name' => 'Hukum',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('faculties')->insert([ //4
            'code' => 'F',
            'name' => 'Ekonomi dan Bisnis',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('faculties')->insert([ //5
            'code' => 'G/R/S',
            'name' => 'Kedokteran',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('faculties')->insert([ //6
            'code' => 'H',
            'name' => 'Pertanian',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('faculties')->insert([ //7
            'code' => 'I',
            'name' => 'Teknik',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        
        DB::table('faculties')->insert([ //8
            'code' => 'K',
            'name' => 'Keguruan dan Ilmu Pendidikan',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('faculties')->insert([ //9
            'code' => 'M',
            'name' => 'Matematika dan Ilmu Pengetahuan Alam',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('faculties')->insert([ //11
            'code' => 'A/S/T',
            'name' => 'Pascasarjana',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('faculties')->insert([ //12
            'code' => 'S',
            'name' => 'Dokter Spesialis',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('faculties')->insert([ //12
            'code' => 'X',
            'name' => 'Profesi',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('faculties')->insert([
            'code' => 'V',
            'name' => 'Sekolah Vokasi',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('faculties')->insert([
            'id' => 20,
            'code' => 'B',
            'name' => 'Ilmu Budaya',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('faculties')->insert([
            'id' => 21,
            'code' => 'O',
            'name' => 'Keolahragaan',
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

        DB::table('degrees')->insert([
            'name' => 'Sp',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('degrees')->insert([
            'name' => 'Profesi',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
    }
}
