<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class BiodataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');

        for ($i=0; $i < 20; $i++) { 
            DB::table('biodatas')->insert([
                "nama" => $faker->name(),
                "pekerjaan" => $faker->jobTitle(),
                "tanggal_lahir" => $faker->date(),
                "no_telp" => $faker->phoneNumber(),
                "alamat" => $faker->address(),
            ]);
        }
    }
}
