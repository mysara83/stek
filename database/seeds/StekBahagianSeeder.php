<?php

use Illuminate\Database\Seeder;

class StekBahagianSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bahagian')->insert([
            ['nama' => 'Bahagian Khidmat Pengurusan', 'nama_ringkas' => 'BKP'],
            ['nama' => 'Bahagian Teknologi Maklumat & Komunikasi', 'nama_ringkas' => 'BTMK'],
            ['nama' => 'Bahagian Pencegahan', 'nama_ringkas' => 'BP'],
            ['nama' => 'Bahagian Penguatkuasaan $ Keselamatan', 'nama_ringkas' => 'BPK'],
            ['nama' => 'Bahagian Rawatan Perubatan & Pemulihan', 'nama_ringkas' => 'BRPP'],
        ]);
    }
}
