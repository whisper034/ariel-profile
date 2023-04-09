<?php

namespace Database\Seeders;

use App\Models\Ipk;
use App\Models\MataKuliah;
use App\Models\Student;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        Student::create([
            'nama' => 'Ariel Sefrian',
        ]);

        Student::create([
            'nama' => 'Nicholaus',
        ]);

        Student::create([
            'nama' => 'Patrick Jonathan',
        ]);

        Student::create([
            'nama' => 'Devin Augustin',
        ]);

        Student::create([
            'nama' => 'Rico Frenaldi T.',
        ]);

        Ipk::create([
            'student_id' => 1,
            'ipk' => rand(0, 40) / 10,
        ]);

        Ipk::create([
            'student_id' => 2,
            'ipk' => rand(0, 40) / 10,
        ]);

        Ipk::create([
            'student_id' => 3,
            'ipk' => rand(0, 40) / 10,
        ]);

        Ipk::create([
            'student_id' => 4,
            'ipk' => rand(0, 40) / 10,
        ]);

        Ipk::create([
            'student_id' => 5,
            'ipk' => rand(0, 40) / 10,
        ]);

        MataKuliah::factory(20)->create();
    }
}
