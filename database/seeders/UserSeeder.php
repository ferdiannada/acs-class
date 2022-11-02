<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'      => 'Alim Sujito',
            'email'     => 'alim@acs.academy',
            'password'  => bcrypt('alim123')
        ]);
        User::create([
            'name'      => 'Moh Munir',
            'email'     => 'mohmunir@acs.academy',
            'password'  => bcrypt('mohmunir123')
        ]);
        User::create([
            'name'      => 'Ferdian Nada',
            'email'     => 'ferdi@acs.academy',
            'password'  => bcrypt('ferdian123')
        ]);
        User::create([
            'name'      => 'siswa1',
            'email'     => 'siswa1@acs.academy',
            'password'  => bcrypt('siswa123')
        ]);
        User::create([
            'name'      => 'siswa2',
            'email'     => 'siswa2@acs.academy',
            'password'  => bcrypt('siswa123')
        ]);
        User::create([
            'name'      => 'siswa3',
            'email'     => 'siswa3@acs.academy',
            'password'  => bcrypt('siswa123')
        ]);
        User::create([
            'name'      => 'siswa4',
            'email'     => 'siswa4@acs.academy',
            'password'  => bcrypt('siswa123')
        ]);
    }
}
