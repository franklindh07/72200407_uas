<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');

        for($i = 1; $i <= 100; $i++)

        DB::table('mahasiswa')->insert([
            'nim' => $faker->nik(),
            'nama' => $faker->name(),
            'gender' => $faker->suffix(),  
            'jurusan' => $faker->suffix(),    
            'bidang_minat' => $faker->suffix()  
        ]);
    }
}
