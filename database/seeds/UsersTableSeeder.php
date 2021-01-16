<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

/** Per evitare errori/suggerimenti rompi***zo di PHP */
define('FORMAT', 'Y-m-d h:i:s');

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([[
            'name' => 'Enrico',
            'surname' => 'Bregoli',
            'email' => 'enrico.bregoli@blackbeard.com',
            'password' => bcrypt('password'),
            'color' => '#3498D8',
            'updated_at' => date('FORMAT'),
            'created_at' => date('FORMAT'),
        ], [
            'name' => 'Mario',
            'surname' => 'Rossi',
            'email' => 'mario.rossi@blackbeard.com',
            'password' => bcrypt('password'),
            'color' => '#F7464A',
            'updated_at' => date('FORMAT'),
            'created_at' => date('FORMAT'),         
        ], [
            'name' => 'Giuseppe',
            'surname' => 'Verdi',
            'email' => 'giuseppe.verdi@blackbeard.com',
            'password' => bcrypt('password'),
            'color' => '#46BFBD',
            'updated_at' => date('FORMAT'),
            'created_at' => date('FORMAT')
        ]]);
    }
}
