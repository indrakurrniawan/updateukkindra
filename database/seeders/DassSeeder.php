<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DassSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
      $userData = [

        [
           'name'=>'indraAdmin',
           'email'=>'admin1@gmail.com',
           'role'=>'administrator',
           'password'=>bcrypt('1234')

        ],
        [
           'name'=>'indraPetugas',
           'email'=>'petugas@gmail.com',
           'role'=>'petugas',
           'password'=>bcrypt('1234')

        ],
        [
           'name'=>'indraPeminjam',
           'email'=>'peminjam@gmail.com',
           'role'=>'peminjam',
           'password'=>bcrypt('1234')

        ],
        ];
        foreach($userData as $key => $val){
            User::create($val);
        }
    }
}
