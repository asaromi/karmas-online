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
            'code' => 'M01',
            'degreeId' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('departments')->insert([
            'facultyId' => 9,
            'name' => 'Fisika',
            'code' => 'M02',
            'degreeId' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('departments')->insert([
            'facultyId' => 9,
            'name' => 'Biologi',
            'code' => 'M04',
            'degreeId' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('departments')->insert([
            'facultyId' => 9,
            'name' => 'Kimia',
            'code' => 'M03',
            'degreeId' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('departments')->insert([
            'facultyId' => 9,
            'name' => 'Informatika',
            'code' => 'M05',
            'degreeId' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('departments')->insert([
            'facultyId' => 9,
            'name' => 'Farmasi',
            'code' => 'M06',
            'degreeId' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('departments')->insert([
            'facultyId' => 9,
            'name' => 'Statistika',
            'code' => 'M07',
            'degreeId' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('departments')->insert([
            'facultyId' => 9,
            'name' => 'Ilmu Lingkungan',
            'code' => 'M08',
            'degreeId' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        // FSRD
        DB::table('departments')->insert([
            'facultyId' => 1,
            'name' => 'Desain Interior',
            'code' => 'C08',
            'degreeId' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        
        DB::table('departments')->insert([
            'facultyId' => 1,
            'code' => 'C07',
            'name' => 'Desain Komunikasi Visual',
            'degreeId' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('departments')->insert([
            'facultyId' => 1,
            'name' => 'Seni Rupa Murni',
            'code' => 'C06',
            'degreeId' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('departments')->insert([
            'facultyId' => 1,
            'name' => 'Kriya Seni',
            'code' => 'C09',
            'degreeId' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        // FISIP
        DB::table('departments')->insert([
            'facultyId' => 2,
            'name' => 'Hubungan Internasional',
            'code' => 'D04',
            'degreeId' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('departments')->insert([
            'facultyId' => 2,
            'name' => 'Sosiologi',
            'code' => 'D03',
            'degreeId' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('departments')->insert([
            'facultyId' => 2,
            'name' => 'Ilmu Komunikasi',
            'code' => 'D02',
            'degreeId' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('departments')->insert([
            'facultyId' => 2,
            'name' => 'Administrasi Negara',
            'code' => 'D01',
            'degreeId' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        // FH
        DB::table('departments')->insert([
            'facultyId' => 3,
            'name' => 'Ilmu Hukum',
            'code' => 'E00',
            'degreeId' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        // FEB
        DB::table('departments')->insert([
            'facultyId' => 4,
            'name' => 'Akuntansi',
            'code' => 'F03',
            'degreeId' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('departments')->insert([
            'facultyId' => 4,
            'name' => 'Manajemen',
            'code' => 'F02',
            'degreeId' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('departments')->insert([
            'facultyId' => 4,
            'name' => 'Ekonomi Pembangunan',
            'code' => 'F01',
            'degreeId' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('departments')->insert([
            'facultyId' => 4,
            'name' => 'Akuntansi',
            'code' => 'F13',
            'degreeId' => 4,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('departments')->insert([
            'facultyId' => 4,
            'name' => 'Manajemen',
            'code' => 'F12',
            'degreeId' => 4,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('departments')->insert([
            'facultyId' => 4,
            'name' => 'Ekonomi Pembangunan',
            'code' => 'F11',
            'degreeId' => 4,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        // FK
        DB::table('departments')->insert([
            'facultyId' => 5,
            'name' => 'Kedokteran',
            'code' => 'G00',
            'degreeId' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('departments')->insert([
            'facultyId' => 5,
            'name' => 'Psikologi',
            'code' => 'G01',
            'degreeId' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        
        // FP
        DB::table('departments')->insert([
            'facultyId' => 6,
            'name' => 'Penyuluhan dan Komunikasi Pertanian',
            'code' => 'H04',
            'degreeId' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('departments')->insert([
            'facultyId' => 6,
            'name' => 'Agroteknologi',
            'code' => 'H07',
            'degreeId' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('departments')->insert([
            'facultyId' => 6,
            'name' => 'Ilmu Tanah',
            'code' => 'H02',
            'degreeId' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('departments')->insert([
            'facultyId' => 6,
            'name' => 'Agribisnis',
            'code' => 'H08',
            'degreeId' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('departments')->insert([
            'facultyId' => 6,
            'name' => 'Peternakan',
            'code' => 'H05',
            'degreeId' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('departments')->insert([
            'facultyId' => 6,
            'name' => 'Ilmu Teknologi Pangan',
            'code' => 'H09',
            'degreeId' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('departments')->insert([
            'facultyId' => 6,
            'name' => 'Pengelolaan Hutan',
            'code' => 'H10',
            'degreeId' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        // FT
        DB::table('departments')->insert([
            'facultyId' => 7,
            'name' => 'Teknik Sipil',
            'code' => 'I01',
            'degreeId' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('departments')->insert([
            'facultyId' => 7,
            'name' => 'Arsitektur',
            'code' => 'I02',
            'degreeId' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('departments')->insert([
            'facultyId' => 7,
            'name' => 'Teknik Mesin',
            'code' => 'I04',
            'degreeId' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('departments')->insert([
            'facultyId' => 7,
            'name' => 'Teknik Industri',
            'code' => 'I03',
            'degreeId' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('departments')->insert([
            'facultyId' => 7,
            'name' => 'Teknik Kimia',
            'code' => 'I05',
            'degreeId' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('departments')->insert([
            'facultyId' => 7,
            'name' => 'Perencanaan Wilayah dan Kota',
            'code' => 'I06',
            'degreeId' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('departments')->insert([
            'facultyId' => 7,
            'name' => 'Teknik Elektro',
            'code' => 'I07',
            'degreeId' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        // FKIP
        DB::table('departments')->insert([
            'facultyId' => 8,
            'name' => 'Pend. Bahasa dan Sastra Indonesia',
            'code' => 'K12',
            'degreeId' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('departments')->insert([
            'facultyId' => 8,
            'name' => 'Pendidikan Matematika',
            'code' => 'K13',
            'degreeId' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('departments')->insert([
            'facultyId' => 8,
            'name' => 'Pendidikan Teknik Bangunan',
            'code' => 'K15',
            'degreeId' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('departments')->insert([
            'facultyId' => 8,
            'name' => 'Pendidikan Bahasa Inggris',
            'code' => 'K22',
            'degreeId' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('departments')->insert([
            'facultyId' => 8,
            'name' => 'Pendidikan Fisika',
            'code' => 'K23',
            'degreeId' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('departments')->insert([
            'facultyId' => 8,
            'name' => 'Pendidikan Teknik Mesin',
            'code' => 'K25',
            'degreeId' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('departments')->insert([
            'facultyId' => 8,
            'name' => 'Bimbingan Konseling',
            'code' => 'K31',
            'degreeId' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('departments')->insert([
            'facultyId' => 8,
            'name' => 'Pendidikan Seni Rupa',
            'code' => 'K32',
            'degreeId' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('departments')->insert([
            'facultyId' => 8,
            'name' => 'Pendidikan Kimia',
            'code' => 'K33',
            'degreeId' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('departments')->insert([
            'facultyId' => 8,
            'name' => 'Pend Teknik Informatika dan Komputer',
            'code' => 'K35',
            'degreeId' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('departments')->insert([
            'facultyId' => 8,
            'name' => 'Pendidikan Bahasa Jawa',
            'code' => 'K42',
            'degreeId' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('departments')->insert([
            'facultyId' => 8,
            'name' => 'Pendidikan Biologi',
            'code' => 'K43',
            'degreeId' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('departments')->insert([
            'facultyId' => 8,
            'name' => 'Pendidikan Sejarah',
            'code' => 'K44',
            'degreeId' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('departments')->insert([
            'facultyId' => 8,
            'name' => 'Pendidikan Ilmu Pengetahuan Alam',
            'code' => 'K45',
            'degreeId' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('departments')->insert([
            'facultyId' => 8,
            'name' => 'Pendidikan Luar Biasa',
            'code' => 'K51',
            'degreeId' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('departments')->insert([
            'facultyId' => 8,
            'name' => 'Pendidikan Geografi',
            'code' => 'K54',
            'degreeId' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('departments')->insert([
            'facultyId' => 8,
            'name' => 'Pend. Pancasila dan Kewarganegaraan',
            'code' => 'K64',
            'degreeId' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('departments')->insert([
            'facultyId' => 8,
            'name' => 'Pendidikan Guru Sekolah Dasar',
            'code' => 'K71',
            'degreeId' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('departments')->insert([
            'facultyId' => 8,
            'name' => 'Pendidikan Administrasi Perkantoran',
            'code' => 'K75',
            'degreeId' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('departments')->insert([
            'facultyId' => 8,
            'name' => 'Pendidikan Ekonomi',
            'code' => 'K74',
            'degreeId' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('departments')->insert([
            'facultyId' => 8,
            'name' => 'Pendidikan Akuntansi',
            'code' => 'K77',
            'degreeId' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('departments')->insert([
            'facultyId' => 8,
            'name' => 'PG Pendidikan Anak Usia Dini',
            'code' => 'K81',
            'degreeId' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('departments')->insert([
            'facultyId' => 8,
            'name' => 'Pendidikan Sosiologi Antropologi',
            'code' => 'K84',
            'degreeId' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        // FIB
        DB::table('departments')->insert([
            'facultyId' => 20,
            'name' => 'Sastra Daerah',
            'code' => 'B01',
            'degreeId' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        
        DB::table('departments')->insert([
            'facultyId' => 20,
            'name' => 'Sastra Indonesia',
            'code' => 'B02',
            'degreeId' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('departments')->insert([
            'facultyId' => 20,
            'name' => 'Sastra Inggris',
            'code' => 'B03',
            'degreeId' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('departments')->insert([
            'facultyId' => 20,
            'name' => 'Ilmu Sejarah',
            'code' => 'B04',
            'degreeId' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('departments')->insert([
            'facultyId' => 20,
            'name' => 'Sastra Arab',
            'code' => 'B05',
            'degreeId' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('departments')->insert([
            'facultyId' => 21,
            'name' => 'Pend. Jasmani Kesehatan dan Rekreasi',
            'code' => 'O01',
            'degreeId' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('departments')->insert([
            'facultyId' => 21,
            'name' => 'Pendidikan Kepelatihan Olahraga',
            'code' => 'O02',
            'degreeId' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('departments')->insert([
            'facultyId' => 10,
            'name' => 'Ilmu Linguistik (Deskriptif)',
            'code' => 'T11',
            'degreeId' => 3,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('departments')->insert([
            'facultyId' => 10,
            'name' => 'Ilmu Linguistik (Pragmatik)',
            'code' => 'T13',
            'degreeId' => 3,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('departments')->insert([
            'facultyId' => 10,
            'name' => 'Ilmu Linguistik (Penerjemahan)',
            'code' => 'T14',
            'degreeId' => 3,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('departments')->insert([
            'facultyId' => 10,
            'name' => 'Kajian Budaya',
            'code' => 'T15',
            'degreeId' => 3,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('departments')->insert([
            'facultyId' => 10,
            'name' => 'Ilmu Komunikasi',
            'code' => 'T20',
            'degreeId' => 3,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('departments')->insert([
            'facultyId' => 10,
            'name' => 'Ilmu Hukum',
            'code' => 'T31',
            'degreeId' => 3,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('departments')->insert([
            'facultyId' => 10,
            'name' => 'Ilmu Ekonomi',
            'code' => 'T40',
            'degreeId' => 3,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('departments')->insert([
            'facultyId' => 10,
            'name' => 'Ilmu Kedokteran',
            'code' => 'T50',
            'degreeId' => 3,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('departments')->insert([
            'facultyId' => 10,
            'name' => 'Ilmu Kesehatan Masyarakat',
            'code' => 'T51',
            'degreeId' => 3,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('departments')->insert([
            'facultyId' => 10,
            'name' => 'Ilmu Penyuluhan Pembangunan',
            'code' => 'T63',
            'degreeId' => 3,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('departments')->insert([
            'facultyId' => 10,
            'name' => 'Ilmu Penyuluhan Pembangunan',
            'code' => 'T64',
            'degreeId' => 3,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('departments')->insert([
            'facultyId' => 10,
            'name' => 'Ilmu Pertanian',
            'code' => 'T65',
            'degreeId' => 3,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('departments')->insert([
            'facultyId' => 10,
            'name' => 'Ilmu Lingkungan',
            'code' => 'T73',
            'degreeId' => 3,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('departments')->insert([
            'facultyId' => 10,
            'name' => 'Ilmu Lingkungan',
            'code' => 'T74',
            'degreeId' => 3,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('departments')->insert([
            'facultyId' => 10,
            'name' => 'Ilmu Teknik Sipil',
            'code' => 'T75',
            'degreeId' => 3,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('departments')->insert([
            'facultyId' => 10,
            'name' => 'Ilmu Teknik Mesin',
            'code' => 'T76',
            'degreeId' => 3,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('departments')->insert([
            'facultyId' => 10,
            'name' => 'Ilmu Pendidikan',
            'code' => 'T81',
            'degreeId' => 3,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('departments')->insert([
            'facultyId' => 10,
            'name' => 'Pendidikan Ilmu Pengetahuan Alam',
            'code' => 'T85',
            'degreeId' => 3,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('departments')->insert([
            'facultyId' => 10,
            'name' => 'Pendidikan Bahasa Indonesia',
            'code' => 'T84',
            'degreeId' => 3,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('departments')->insert([
            'facultyId' => 10,
            'name' => 'Ilmu Keolahragaan',
            'code' => 'T86',
            'degreeId' => 3,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('departments')->insert([
            'facultyId' => 10,
            'name' => 'Pendidikan Sejarah',
            'code' => 'T87',
            'degreeId' => 3,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('departments')->insert([
            'facultyId' => 10,
            'name' => 'Pendidikan Ekonomi',
            'code' => 'T88',
            'degreeId' => 3,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('departments')->insert([
            'facultyId' => 10,
            'name' => 'Fisika',
            'code' => 'T78',
            'degreeId' => 3,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('departments')->insert([
            'facultyId' => 10,
            'name' => 'Biologi',
            'code' => 'T77',
            'degreeId' => 3,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('departments')->insert([
            'facultyId' => 10,
            'name' => 'Ilmu Keolahragaan',
            'code' => 'A12',
            'degreeId' => 2,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('departments')->insert([
            'facultyId' => 10,
            'name' => 'Ilmu Lingkungan',
            'code' => 'A13',
            'degreeId' => 2,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('departments')->insert([
            'facultyId' => 10,
            'name' => 'Seni Rupa',
            'code' => 'S01',
            'degreeId' => 2,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('departments')->insert([
            'facultyId' => 10,
            'name' => 'Ilmu Kesehatan Masyarakat',
            'code' => 'S02',
            'degreeId' => 2,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('departments')->insert([
            'facultyId' => 10,
            'name' => 'Pendidikan Guru Sekolah Dasar',
            'code' => 'S03',
            'degreeId' => 2,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('departments')->insert([
            'facultyId' => 10,
            'name' => 'Pendidikan Luar Biasa',
            'code' => 'S04',
            'degreeId' => 2,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('departments')->insert([
            'facultyId' => 10,
            'name' => 'Pendidikan Seni',
            'code' => 'S05',
            'degreeId' => 2,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('departments')->insert([
            'facultyId' => 10,
            'name' => 'Kimia',
            'code' => 'S06',
            'degreeId' => 2,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('departments')->insert([
            'facultyId' => 10,
            'name' => 'Teknik Kimia',
            'code' => 'S07',
            'degreeId' => 2,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('departments')->insert([
            'facultyId' => 10,
            'name' => 'Pendidikan Fisika',
            'code' => 'S08',
            'degreeId' => 2,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('departments')->insert([
            'facultyId' => 10,
            'name' => 'Pendidikan Kimia',
            'code' => 'S09',
            'degreeId' => 2,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('departments')->insert([
            'facultyId' => 10,
            'name' => 'Pendidikan Biologi',
            'code' => 'S10',
            'degreeId' => 2,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('departments')->insert([
            'facultyId' => 10,
            'name' => 'Ilmu Linguistik (Deskriptif)',
            'code' => 'S11',
            'degreeId' => 2,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('departments')->insert([
            'facultyId' => 10,
            'name' => 'Ilmu Linguistik (Penerjemahan)',
            'code' => 'S13',
            'degreeId' => 2,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('departments')->insert([
            'facultyId' => 10,
            'name' => 'Arsitektur',
            'code' => 'S14',
            'degreeId' => 2,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('departments')->insert([
            'facultyId' => 10,
            'name' => 'Pend. Pancasila dan Kewarganegaraan',
            'code' => 'S15',
            'degreeId' => 2,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('departments')->insert([
            'facultyId' => 10,
            'name' => 'Pendidikan Guru Vokasi',
            'code' => 'S16',
            'degreeId' => 2,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('departments')->insert([
            'facultyId' => 5,
            'name' => 'Ilmu Kesehatan Kulit dan Kelamin',
            'code' => 'S20',
            'degreeId' => 8,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('departments')->insert([
            'facultyId' => 5,
            'name' => 'Radiologi',
            'code' => 'S21',
            'degreeId' => 8,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('departments')->insert([
            'facultyId' => 5,
            'name' => 'Kardiologi & KV',
            'code' => 'S51',
            'degreeId' => 8,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('departments')->insert([
            'facultyId' => 5,
            'name' => 'Ilmu Penyakit Syaraf',
            'code' => 'S55',
            'degreeId' => 8,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('departments')->insert([
            'facultyId' => 5,
            'name' => 'Ilmu Bedah',
            'code' => 'S56',
            'degreeId' => 8,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('departments')->insert([
            'facultyId' => 5,
            'name' => 'Psikiatri',
            'code' => 'S57',
            'degreeId' => 8,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('departments')->insert([
            'facultyId' => 5,
            'name' => 'Ilmu Kebidanan dan Penyakit Kandungan',
            'code' => 'S58',
            'degreeId' => 8,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('departments')->insert([
            'facultyId' => 5,
            'name' => 'Ilmu Kesehatan Anak',
            'code' => 'S59',
            'degreeId' => 8,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('departments')->insert([
            'facultyId' => 5,
            'name' => 'Ilmu Penyakit Paru',
            'code' => 'S60',
            'degreeId' => 8,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('departments')->insert([
            'facultyId' => 5,
            'name' => 'Ilmu Penyakit THT',
            'code' => 'S92',
            'degreeId' => 8,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('departments')->insert([
            'facultyId' => 5,
            'name' => 'Orthopaedik dan Traumatologi',
            'code' => 'S93',
            'degreeId' => 8,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('departments')->insert([
            'facultyId' => 5,
            'name' => 'Ilmu Penyakit Dalam',
            'code' => 'S96',
            'degreeId' => 8,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('departments')->insert([
            'facultyId' => 5,
            'name' => 'Ilmu Patologi Klinik',
            'code' => 'S97',
            'degreeId' => 8,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('departments')->insert([
            'facultyId' => 5,
            'name' => 'Anestesiologi dan Reanimasi',
            'code' => 'S98',
            'degreeId' => 8,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('departments')->insert([
            'facultyId' => 10,
            'name' => 'Ilmu Komunikasi (Teori)',
            'code' => 'S22',
            'degreeId' => 2,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('departments')->insert([
            'facultyId' => 10,
            'name' => 'Ilmu Komunikasi (Manajemen)',
            'code' => 'S23',
            'degreeId' => 2,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('departments')->insert([
            'facultyId' => 10,
            'name' => 'Administrasi Publik',
            'code' => 'S24',
            'degreeId' => 2,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('departments')->insert([
            'facultyId' => 10,
            'name' => 'Sosiologi',
            'code' => 'S25',
            'degreeId' => 2,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('departments')->insert([
            'facultyId' => 10,
            'name' => 'Ilmu Hukum (Kesehatan)',
            'code' => 'S30',
            'degreeId' => 2,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('departments')->insert([
            'facultyId' => 10,
            'name' => 'Ilmu Hukum (Kebijakan Publik)',
            'code' => 'S31',
            'degreeId' => 2,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('departments')->insert([
            'facultyId' => 10,
            'name' => 'Ilmu Hukum (Bisnis)',
            'code' => 'S32',
            'degreeId' => 2,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('departments')->insert([
            'facultyId' => 10,
            'name' => 'Ilmu Hukum (Pidana Ekonomi)',
            'code' => 'S33',
            'degreeId' => 2,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('departments')->insert([
            'facultyId' => 10,
            'name' => 'Ilmu Hukum (Islam)',
            'code' => 'S34',
            'degreeId' => 2,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('departments')->insert([
            'facultyId' => 10,
            'name' => 'Kenotariatan',
            'code' => 'S35',
            'degreeId' => 2,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('departments')->insert([
            'facultyId' => 10,
            'name' => 'Manajemen',
            'code' => 'S41',
            'degreeId' => 2,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('departments')->insert([
            'facultyId' => 10,
            'name' => 'Ekonomi dan Studi Pembangunan',
            'code' => 'S42',
            'degreeId' => 2,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('departments')->insert([
            'facultyId' => 10,
            'name' => 'Akuntansi',
            'code' => 'S43',
            'degreeId' => 2,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('departments')->insert([
            'facultyId' => 10,
            'name' => 'Pend. Bahasa dan Sastra Daerah',
            'code' => 'S44',
            'degreeId' => 2,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('departments')->insert([
            'facultyId' => 10,
            'name' => 'Ilmu Kedokteran Keluarga',
            'code' => 'S50',
            'degreeId' => 2,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('departments')->insert([
            'facultyId' => 10,
            'name' => 'Ilmu Kedokteran Keluarga',
            'code' => 'S52',
            'degreeId' => 2,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('departments')->insert([
            'facultyId' => 10,
            'name' => 'Ilmu Gizi',
            'code' => 'S53',
            'degreeId' => 2,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('departments')->insert([
            'facultyId' => 10,
            'name' => 'Agronomi',
            'code' => 'S61',
            'degreeId' => 2,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('departments')->insert([
            'facultyId' => 10,
            'name' => 'Ilmu Penyuluhan Pembangunan',
            'code' => 'S62',
            'degreeId' => 2,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('departments')->insert([
            'facultyId' => 10,
            'name' => 'Ilmu Penyuluhan Pembangunan',
            'code' => 'S63',
            'degreeId' => 2,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('departments')->insert([
            'facultyId' => 10,
            'name' => 'Agribisnis',
            'code' => 'S64',
            'degreeId' => 2,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('departments')->insert([
            'facultyId' => 10,
            'name' => 'Ilmu Tanah',
            'code' => 'S65',
            'degreeId' => 2,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('departments')->insert([
            'facultyId' => 10,
            'name' => 'Peternakan',
            'code' => 'S66',
            'degreeId' => 2,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('departments')->insert([
            'facultyId' => 10,
            'name' => 'Kajian Budaya',
            'code' => 'S70',
            'degreeId' => 2,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('departments')->insert([
            'facultyId' => 10,
            'name' => 'Teknik Industri',
            'code' => 'S80',
            'degreeId' => 2,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('departments')->insert([
            'facultyId' => 10,
            'name' => 'Teknologi Pendidikan',
            'code' => 'S81',
            'degreeId' => 2,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('departments')->insert([
            'facultyId' => 10,
            'name' => 'Pendidikan Sains',
            'code' => 'S83',
            'degreeId' => 2,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('departments')->insert([
            'facultyId' => 10,
            'name' => 'Pendidikan Bahasa Indonesia',
            'code' => 'S84',
            'degreeId' => 2,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('departments')->insert([
            'facultyId' => 10,
            'name' => 'Pendidikan Matematika',
            'code' => 'S85',
            'degreeId' => 2,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('departments')->insert([
            'facultyId' => 10,
            'name' => 'Pendidikan Sejarah',
            'code' => 'S86',
            'degreeId' => 2,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('departments')->insert([
            'facultyId' => 10,
            'name' => 'Pendidikan Geografi',
            'code' => 'S88',
            'degreeId' => 2,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('departments')->insert([
            'facultyId' => 10,
            'name' => 'Pendidikan Bahasa Inggris',
            'code' => 'S89',
            'degreeId' => 2,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('departments')->insert([
            'facultyId' => 10,
            'name' => 'Biosains',
            'code' => 'S90',
            'degreeId' => 2,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('departments')->insert([
            'facultyId' => 10,
            'name' => 'Ilmu Fisika',
            'code' => 'S91',
            'degreeId' => 2,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('departments')->insert([
            'facultyId' => 10,
            'name' => 'Teknik Sipil',
            'code' => 'S94',
            'degreeId' => 2,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('departments')->insert([
            'facultyId' => 10,
            'name' => 'Teknik Mesin',
            'code' => 'S95',
            'degreeId' => 2,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('departments')->insert([
            'facultyId' => 10,
            'name' => 'Pendidikan Ekonomi',
            'code' => 'S99',
            'degreeId' => 2,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('departments')->insert([
            'facultyId' => 5,
            'name' => 'Hiperkes dan Keselamatan Kerja',
            'code' => 'R00',
            'degreeId' => 6,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('departments')->insert([
            'facultyId' => 5,
            'name' => 'Keselamatan dan Kesehatan Kerja',
            'code' => 'R02',
            'degreeId' => 7,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('departments')->insert([
            'facultyId' => 5,
            'name' => 'Kebidanan Terapan',
            'code' => 'R04',
            'degreeId' => 7,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('departments')->insert([
            'facultyId' => 13,
            'name' => 'Demografi dan Pencatatan Sipil',
            'code' => 'E31',
            'degreeId' => 7,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('departments')->insert([
            'facultyId' => 13,
            'name' => 'Bahasa Inggris',
            'code' => 'V01',
            'degreeId' => 6,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('departments')->insert([
            'facultyId' => 13,
            'name' => 'Usaha Pernjalanan Wisata',
            'code' => 'V02',
            'degreeId' => 6,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('departments')->insert([
            'facultyId' => 13,
            'name' => 'Desain Komunikasi Visual',
            'code' => 'V03',
            'degreeId' => 6,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('departments')->insert([
            'facultyId' => 13,
            'name' => 'Bahasa Mandarin',
            'code' => 'V04',
            'degreeId' => 6,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('departments')->insert([
            'facultyId' => 13,
            'name' => 'Manajemen Administrasi',
            'code' => 'V07',
            'degreeId' => 6,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('departments')->insert([
            'facultyId' => 13,
            'name' => 'Perpustakaan',
            'code' => 'V10',
            'degreeId' => 6,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('departments')->insert([
            'facultyId' => 13,
            'name' => 'Komunikasi Terapan',
            'code' => 'V11',
            'degreeId' => 6,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('departments')->insert([
            'facultyId' => 13,
            'name' => 'Manajemen Perdagangan',
            'code' => 'V12',
            'degreeId' => 6,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('departments')->insert([
            'facultyId' => 13,
            'name' => 'Manajemen Pemasaran',
            'code' => 'V13',
            'degreeId' => 6,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('departments')->insert([
            'facultyId' => 13,
            'name' => 'Akuntansi',
            'code' => 'V14',
            'degreeId' => 6,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('departments')->insert([
            'facultyId' => 13,
            'name' => 'Perpajakan',
            'code' => 'V15',
            'degreeId' => 6,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('departments')->insert([
            'facultyId' => 13,
            'name' => 'Manajemen Bisnis',
            'code' => 'V16',
            'degreeId' => 6,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('departments')->insert([
            'facultyId' => 13,
            'name' => 'Keuangan dan Perbankan',
            'code' => 'V17',
            'degreeId' => 6,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('departments')->insert([
            'facultyId' => 13,
            'name' => 'Teknologi Hasil Pertanian',
            'code' => 'V18',
            'degreeId' => 6,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('departments')->insert([
            'facultyId' => 13,
            'name' => 'Budidaya Ternak',
            'code' => 'V23',
            'degreeId' => 6,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('departments')->insert([
            'facultyId' => 13,
            'name' => 'Teknik Kimia',
            'code' => 'V26',
            'degreeId' => 6,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('departments')->insert([
            'facultyId' => 13,
            'name' => 'Teknik Mesin',
            'code' => 'V29',
            'degreeId' => 6,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('departments')->insert([
            'facultyId' => 13,
            'name' => 'Teknik Informatika',
            'code' => 'V34',
            'degreeId' => 6,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        
        DB::table('departments')->insert([
            'facultyId' => 13,
            'name' => 'Farmasi',
            'code' => 'V37',
            'degreeId' => 6,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        
        DB::table('departments')->insert([
            'facultyId' => 13,
            'name' => 'Agribisnis',
            'code' => 'V41',
            'degreeId' => 6,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        
        DB::table('departments')->insert([
            'facultyId' => 13,
            'name' => 'Teknik Sipil',
            'code' => 'V42',
            'degreeId' => 6,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        
        DB::table('departments')->insert([
            'facultyId' => 13,
            'name' => 'Kebidanan',
            'code' => 'V43',
            'degreeId' => 6,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        
        DB::table('departments')->insert([
            'facultyId' => 13,
            'name' => 'Pendidikan Profesi Guru',
            'code' => 'X90',
            'degreeId' => 9,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);


    }
}
