<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        \App\Models\User::create([
            'name' => 'Wahyu Fikri',
            'email' => 'wfzputra@gmail.com',
            'nim'=> 222355201016,
            'password'=>bcrypt('1234'),
        ]);

        \App\Models\User::factory(3)->create();

        \App\Models\Task::create([
            'nama_mk' => 'Pemrograman Web',
            'nama_dosen' => 'Izzatul Ummami S.Kom., M.Kom.',
            'kode_mk' => 'A1122',
            'slug' => 'pbw',
            'body'=> 'Tugas Mata Kuliah'
        ]);

        \App\Models\Task::create([
            'nama_mk' => 'Sistem Operasi',
            'nama_dosen'=> 'Gugus A S.Kom., M.Kom.',
            'kode_mk' => 'A1133',
            'slug' => 'sisop',
            'body'=> 'Tugas Mata Kuliah'
        ]);

        \App\Models\Task::create([
            'nama_mk' => 'Mikroprosesor',
            'nama_dosen'=> 'Winarti S.Kom., M.Kom.',
            'kode_mk' => 'A1144',
            'slug' => 'mikropro',
            'body'=> 'Tugas Mata Kuliah'
        ]);

        \App\Models\Task::create([
            'nama_mk' => 'Kewarganegaraan',
            'nama_dosen'=> 'Rini S.Pd.',
            'kode_mk' => 'A1155',
            'slug' => 'kwrga',
            'body'=> 'Tugas Mata Kuliah'
        ]);
    
    }

}
