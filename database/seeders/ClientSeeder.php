<?php

namespace Database\Seeders;

use App\Models\Client;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Client::create([
            'name' => 'Cristian Orrego',
            'email' => 'cristian.coldisama@gmail.com',
            'role' => 'Profesor'
        ]);
        Client::create([
            'name' => 'Juan David Triana',
            'email' => 'juandavid.coldisama@gmail.com',
            'role' => 'Profesor'
        ]);
        Client::create([
            'name' => 'David Sarchi',
            'email' => 'david.sarchi.coldisama@gmail.com',
            'role' => 'Profesor'
        ]);
        Client::create([
            'name' => 'Laura Yepez',
            'email' => 'laura.coldisama@gmail.com',
            'role' => 'Profesor'
        ]);
        Client::create([
            'name' => 'Alejandra Gómez',
            'email' => 'alejandra.coldisama@gmail.com',
            'role' => 'Profesor'
        ]);
        Client::create([
            'name' => 'Juan Camilo Grisales',
            'email' => 'camilo.coldisama@gmail.com',
            'role' => 'Profesor'
        ]);
        Client::create([
            'name' => 'Gustavo Nieto',
            'email' => 'gustao.coldisama@gmail.com',
            'role' => 'Profesor'
        ]);
        Client::create([
            'name' => 'Patricia Arango',
            'email' => 'patricia.coldisama@gmail.com',
            'role' => 'Profesor'
        ]);
        Client::create([
            'name' => 'Sandra Durán',
            'email' => 'sandra.coldisama@gmail.com',
            'role' => 'Profesor'
        ]);
        Client::create([
            'name' => 'Valentina Rodriguez',
            'email' => 'valentina.coldisama@gmail.com',
            'role' => 'Profesor'
        ]);
    }
}
