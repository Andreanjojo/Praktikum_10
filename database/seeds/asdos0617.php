<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class asdos0617 extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
public function run()
{
    // DB::table('asdos0617')->insert([
    //     [
    //         'nama' => 'Alexander Daniel Eka',
    //         'mata_kuliah' => 'Pemrograman Web',
    //         'email' => 'danielekas@gmail.com',
    //         'no_hp' => '081234567890',
    //     ],
    //     [
    //         'nama' => 'Putri Ayu Lestari',
    //         'mata_kuliah' => 'Statistika',
    //         'email' => 'putriayu@gmail.com',
    //         'no_hp' => '081298765432',
    //     ],
    //     [
    //         'nama' => 'Budi Santoso',
    //         'mata_kuliah' => 'Database Management',
    //         'email' => 'budi.santoso@mail.com',
    //         'no_hp' => '082112345678',
    //     ],
    //     [
    //         'nama' => 'Siti Nurhaliza',
    //         'mata_kuliah' => 'Manajemen Jaringan',
    //         'email' => 'sitinur@mail.com',
    //         'no_hp' => '081377788899',
    //     ],
    //     [
    //         'nama' => 'Andi Prasetyo',
    //         'mata_kuliah' => 'Sistem Operasi',
    //         'email' => 'andiprasetyo@mail.com',
    //         'no_hp' => '082298877665',
    //     ],
    // ]);

    $faker = Faker::create('id_ID');
    for ($i = 0; $i < 86; $i++) {
        DB::table('asdos0617')->insert([
            'nama' => $faker->name,
            'mata_kuliah' => $faker->word,
            'email' => $faker->email,
            'no_hp' => $faker->phoneNumber,
        ]);
    }
}

}
