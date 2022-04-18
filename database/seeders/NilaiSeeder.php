<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NilaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $data = [
            [
                "mahasiswa_id" => "2041720045",
                "matakuliah_id" => "1",
                "nilai" => "A"

            ],
            [
                "mahasiswa_id" => "2041720045",
                "matakuliah_id" => "2",
                "nilai" => "B"

            ],
            [
                "mahasiswa_id" => "2041720045",
                "matakuliah_id" => "3",
                "nilai" => "A"

            ],
            [
                "mahasiswa_id" => "2041720045",
                "matakuliah_id" => "4",
                "nilai" => "B"

            ],
            [
                "mahasiswa_id" => "2041722245",
                "matakuliah_id" => "1",
                "nilai" => "A"
            ],
            [
                "mahasiswa_id" => "2041722245",
                "matakuliah_id" => "2",
                "nilai" => "B"

            ],
            [
                "mahasiswa_id" => "2041722245",
                "matakuliah_id" => "3",
                "nilai" => "A"

            ],
            [
                "mahasiswa_id" => "2041722245",
                "matakuliah_id" => "4",
                "nilai" => "B"

            ],
            [
                "mahasiswa_id" => "2041720115",
                "matakuliah_id" => "1",
                "nilai" => "A"
            ],
            [
                "mahasiswa_id" => "2041720115",
                "matakuliah_id" => "2",
                "nilai" => "B"

            ],
            [
                "mahasiswa_id" => "2041720115",
                "matakuliah_id" => "3",
                "nilai" => "A"

            ],
            [
                "mahasiswa_id" => "2041720115",
                "matakuliah_id" => "4",
                "nilai" => "B"

            ],
            [
                "mahasiswa_id" => "2041722345",
                "matakuliah_id" => "1",
                "nilai" => "A"
            ],
            [
                "mahasiswa_id" => "2041722345",
                "matakuliah_id" => "2",
                "nilai" => "B"

            ],
            [
                "mahasiswa_id" => "2041722345",
                "matakuliah_id" => "3",
                "nilai" => "A"

            ],
            [
                "mahasiswa_id" => "2041722345",
                "matakuliah_id" => "4",
                "nilai" => "B"

            ],
            [
                "mahasiswa_id" => "2041720009",
                "matakuliah_id" => "1",
                "nilai" => "B"
            ],
            [
                "mahasiswa_id" => "2041720009",
                "matakuliah_id" => "2",
                "nilai" => "B"

            ],
            [
                "mahasiswa_id" => "2041720009",
                "matakuliah_id" => "3",
                "nilai" => "A"

            ],
            [
                "mahasiswa_id" => "2041720009",
                "matakuliah_id" => "4",
                "nilai" => "B"

            ],
        ];

        DB::table('mahasiswa_matakuliah')->insert($data);
    }

}
