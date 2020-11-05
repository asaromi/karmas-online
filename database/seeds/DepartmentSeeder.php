<?php

use Illuminate\Database\Seeder;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // MIPA
        DB::table('departments')->insert([
            'facultyId' => 9,
            'name' => 'Matematika',
            'degreeId' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('departments')->insert([
            'facultyId' => 9,
            'name' => 'Fisika',
            'degreeId' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('departments')->insert([
            'facultyId' => 9,
            'name' => 'Biologi',
            'degreeId' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('departments')->insert([
            'facultyId' => 9,
            'name' => 'Kimia',
            'degreeId' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('departments')->insert([
            'facultyId' => 9,
            'name' => 'Informatika',
            'degreeId' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('departments')->insert([
            'facultyId' => 9,
            'name' => 'Farmasi',
            'degreeId' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('departments')->insert([
            'facultyId' => 9,
            'name' => 'Statistika',
            'degreeId' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('departments')->insert([
            'facultyId' => 9,
            'name' => 'Ilmu Lingkungan',
            'degreeId' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        // FSRD
        DB::table('departments')->insert([
            'facultyId' => 1,
            'name' => 'Desain Interior',
            'degreeId' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        
        DB::table('departments')->insert([
            'facultyId' => 1,
            'name' => 'Desain Komunikasi Visual',
            'degreeId' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('departments')->insert([
            'facultyId' => 1,
            'name' => 'Seni Rupa Murni',
            'degreeId' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('departments')->insert([
            'facultyId' => 1,
            'name' => 'Kriya Seni',
            'degreeId' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        // FISIP
        DB::table('departments')->insert([
            'facultyId' => 2,
            'name' => 'Hubungan Internasional',
            'degreeId' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('departments')->insert([
            'facultyId' => 2,
            'name' => 'Sosiologi',
            'degreeId' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('departments')->insert([
            'facultyId' => 2,
            'name' => 'Ilmu Komunikasi',
            'degreeId' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('departments')->insert([
            'facultyId' => 2,
            'name' => 'Administrasi Negara',
            'degreeId' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        // FH
        DB::table('departments')->insert([
            'facultyId' => 3,
            'name' => 'Ilmu Hukum',
            'degreeId' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        // FEB
        DB::table('departments')->insert([
            'facultyId' => 4,
            'name' => 'Akuntansi',
            'degreeId' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('departments')->insert([
            'facultyId' => 4,
            'name' => 'Manajemen',
            'degreeId' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('departments')->insert([
            'facultyId' => 4,
            'name' => 'Ekonomi Pembangunan',
            'degreeId' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('departments')->insert([
            'facultyId' => 4,
            'name' => 'Akuntansi',
            'degreeId' => 4,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('departments')->insert([
            'facultyId' => 4,
            'name' => 'Manajemen',
            'degreeId' => 4,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('departments')->insert([
            'facultyId' => 4,
            'name' => 'Ekonomi Pembangunan',
            'degreeId' => 4,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        // FK
        DB::table('departments')->insert([
            'facultyId' => 5,
            'name' => 'Kedokteran',
            'degreeId' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('departments')->insert([
            'facultyId' => 5,
            'name' => 'Psikologi',
            'degreeId' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        
        // FP
        DB::table('departments')->insert([
            'facultyId' => 6,
            'name' => 'Penyuluhan dan Komunikasi Pertanian',
            'degreeId' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('departments')->insert([
            'facultyId' => 6,
            'name' => 'Penyuluhan dan Komunikasi Pertanian',
            'degreeId' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('departments')->insert([
            'facultyId' => 6,
            'name' => 'Agroteknologi',
            'degreeId' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('departments')->insert([
            'facultyId' => 6,
            'name' => 'Ilmu Tanah',
            'degreeId' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('departments')->insert([
            'facultyId' => 6,
            'name' => 'Agribisnis',
            'degreeId' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('departments')->insert([
            'facultyId' => 6,
            'name' => 'Peternakan',
            'degreeId' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('departments')->insert([
            'facultyId' => 6,
            'name' => 'Ilmu Teknologi Pangan',
            'degreeId' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('departments')->insert([
            'facultyId' => 6,
            'name' => 'Pengelolaan Hutan',
            'degreeId' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        // FT
        DB::table('departments')->insert([
            'facultyId' => 7,
            'name' => 'Teknik Sipil',
            'degreeId' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('departments')->insert([
            'facultyId' => 7,
            'name' => 'Arsitektur',
            'degreeId' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('departments')->insert([
            'facultyId' => 7,
            'name' => 'Teknik Mesin',
            'degreeId' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('departments')->insert([
            'facultyId' => 7,
            'name' => 'Teknik Industri',
            'degreeId' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('departments')->insert([
            'facultyId' => 7,
            'name' => 'Teknik Kimia',
            'degreeId' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('departments')->insert([
            'facultyId' => 7,
            'name' => 'Perencanaan Wilayah dan Kota',
            'degreeId' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('departments')->insert([
            'facultyId' => 7,
            'name' => 'Teknik Elektro',
            'degreeId' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        // FKIP
        DB::table('departments')->insert([
            'facultyId' => 8,
            'name' => 'Pendidikan Bahasa dan Sastra Indonesia',
            'degreeId' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
    }
}
