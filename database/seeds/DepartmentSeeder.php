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

        DB::table('departments')->insert([
            'facultyId' => 8,
            'name' => 'Pendidikan Matematika',
            'degreeId' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('departments')->insert([
            'facultyId' => 8,
            'name' => 'Pendidikan Teknik Bangunan',
            'degreeId' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('departments')->insert([
            'facultyId' => 8,
            'name' => 'Pendidikan Bahasa Inggris',
            'degreeId' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('departments')->insert([
            'facultyId' => 8,
            'name' => 'Pendidikan Fisika',
            'degreeId' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('departments')->insert([
            'facultyId' => 8,
            'name' => 'Pendidikan Teknik Mesin',
            'degreeId' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('departments')->insert([
            'facultyId' => 8,
            'name' => 'Bimbingan Konseling',
            'degreeId' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('departments')->insert([
            'facultyId' => 8,
            'name' => 'Pendidikan Seni Rupa',
            'degreeId' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('departments')->insert([
            'facultyId' => 8,
            'name' => 'Pendidikan Kimia',
            'degreeId' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('departments')->insert([
            'facultyId' => 8,
            'name' => 'Pendidikan Teknik Informatika dan Komputer',
            'degreeId' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('departments')->insert([
            'facultyId' => 8,
            'name' => 'Pendidikan Bahasa Jawa',
            'degreeId' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('departments')->insert([
            'facultyId' => 8,
            'name' => 'Pendidikan Biologi',
            'degreeId' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('departments')->insert([
            'facultyId' => 8,
            'name' => 'Pendidikan Sejarah',
            'degreeId' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('departments')->insert([
            'facultyId' => 8,
            'name' => 'Pendidikan Ilmu Pengetahuan Alam',
            'degreeId' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('departments')->insert([
            'facultyId' => 8,
            'name' => 'Pendidikan Luar Biasa',
            'degreeId' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('departments')->insert([
            'facultyId' => 8,
            'name' => 'Pendidikan Geografi',
            'degreeId' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('departments')->insert([
            'facultyId' => 8,
            'name' => 'Pendidikan Pancasila dan Kewarganegaraan',
            'degreeId' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('departments')->insert([
            'facultyId' => 8,
            'name' => 'Pendidikan Guru Sekolah Dasar',
            'degreeId' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('departments')->insert([
            'facultyId' => 8,
            'name' => 'Pendidikan Administrasi Perkantoran',
            'degreeId' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('departments')->insert([
            'facultyId' => 8,
            'name' => 'Pendidikan Ekonomi',
            'degreeId' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('departments')->insert([
            'facultyId' => 8,
            'name' => 'Pendidikan Akuntansi',
            'degreeId' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('departments')->insert([
            'facultyId' => 8,
            'name' => 'Pendidikan Guru Pendidikan Anak Usia Dini',
            'degreeId' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('departments')->insert([
            'facultyId' => 8,
            'name' => 'Pendidikan Sosiologi Antropologi',
            'degreeId' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('departments')->insert([
            'facultyId' => 14,
            'name' => 'Pendidikan Sosiologi Antropologi',
            'degreeId' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        // FIB
        DB::table('departments')->insert([
            'facultyId' => 20,
            'name' => 'Sastra Daerah',
            'degreeId' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        
        DB::table('departments')->insert([
            'facultyId' => 20,
            'name' => 'Sastra Indonesia',
            'degreeId' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('departments')->insert([
            'facultyId' => 20,
            'name' => 'Sastra Inggris',
            'degreeId' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('departments')->insert([
            'facultyId' => 20,
            'name' => 'Ilmu Sejarah',
            'degreeId' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('departments')->insert([
            'facultyId' => 20,
            'name' => 'Sastra Indonesia',
            'degreeId' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('departments')->insert([
            'facultyId' => 21,
            'name' => 'Pendidikan Jasmani Kesehatan dan Rekreasi',
            'degreeId' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('departments')->insert([
            'facultyId' => 21,
            'name' => 'Pendidikan Kepelatihan Olahraga',
            'degreeId' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('departments')->insert([
            'facultyId' => 13,
            'name' => 'Linguistik',
            'degreeId' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('departments')->insert([
            'facultyId' => 13,
            'name' => 'Kajian Budaya',
            'degreeId' => 3,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('departments')->insert([
            'facultyId' => 13,
            'name' => 'Ilmu Komunikasi',
            'degreeId' => 3,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('departments')->insert([
            'facultyId' => 13,
            'name' => 'Ilmu Hukum',
            'degreeId' => 3,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('departments')->insert([
            'facultyId' => 13,
            'name' => 'Ilmu Ekonomi',
            'degreeId' => 3,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('departments')->insert([
            'facultyId' => 13,
            'name' => 'Ilmu Kedokteran',
            'degreeId' => 3,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('departments')->insert([
            'facultyId' => 13,
            'name' => 'Ilmu Kesehatan Masyarakat',
            'degreeId' => 3,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('departments')->insert([
            'facultyId' => 13,
            'name' => 'Penyuluhan Pembangunan/Pemberdayaan Masyarakat',
            'degreeId' => 3,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('departments')->insert([
            'facultyId' => 13,
            'name' => 'Ilmu Pertanian',
            'degreeId' => 3,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('departments')->insert([
            'facultyId' => 13,
            'name' => 'Ilmu Lingkungan',
            'degreeId' => 3,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('departments')->insert([
            'facultyId' => 13,
            'name' => 'Teknik Sipil',
            'degreeId' => 3,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('departments')->insert([
            'facultyId' => 13,
            'name' => 'Teknik Mesin',
            'degreeId' => 3,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('departments')->insert([
            'facultyId' => 13,
            'name' => 'Ilmu Pendidikan',
            'degreeId' => 3,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('departments')->insert([
            'facultyId' => 13,
            'name' => 'Pendidikan Ilmu Pengetahuan Alam',
            'degreeId' => 3,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('departments')->insert([
            'facultyId' => 13,
            'name' => 'Pendidikan Bahasa Indonesia',
            'degreeId' => 3,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('departments')->insert([
            'facultyId' => 13,
            'name' => 'Ilmu Keolahragaan',
            'degreeId' => 3,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('departments')->insert([
            'facultyId' => 13,
            'name' => 'Pendidikan Sejarah',
            'degreeId' => 3,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('departments')->insert([
            'facultyId' => 13,
            'name' => 'Pendidikan Ekonomi',
            'degreeId' => 3,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('departments')->insert([
            'facultyId' => 13,
            'name' => 'Ilmu Fisika',
            'degreeId' => 3,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('departments')->insert([
            'facultyId' => 13,
            'name' => 'Biologi',
            'degreeId' => 3,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
    }
}
