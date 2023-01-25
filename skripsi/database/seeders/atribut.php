<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Atributs;

class atribut extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Atributs::create([
            'nama_atribut' => 'Jenis Kelamin' 
        ]);
        Atributs::create([
            'nama_atribut' => 'Umur Sapi' 
        ]);
        Atributs::create([
            'nama_atribut' => 'Kondisi Mata' 
        ]);
        Atributs::create([
            'nama_atribut' => 'Kondisi Mulut' 
        ]);
        Atributs::create([
            'nama_atribut' => 'Kondisi Nafas' 
        ]);
        Atributs::create([
            'nama_atribut' => 'Kondisi Nadi' 
        ]);
        Atributs::create([
            'nama_atribut' => 'Kondisi Perut' 
        ]);
        Atributs::create([
            'nama_atribut' => 'Kondisi Alat Kelamin' 
        ]);
        Atributs::create([
            'nama_atribut' => 'Kondisi Ambing' 
        ]);
        Atributs::create([
            'nama_atribut' => 'Kondisi Fisik Sapi' 
        ]);
        Atributs::create([
            'nama_atribut' => 'Kondisi Pencernaan' 
        ]);
        Atributs::create([
            'nama_atribut' => 'Kondisi Cairan Susu' 
        ]);
        Atributs::create([
            'nama_atribut' => 'Suhu Tubuh' 
        ]);
        Atributs::create([
            'nama_atribut' => 'Nafsu Makan' 
        ]);
        Atributs::create([
            'nama_atribut' => 'Gejala Lain' 
        ]);
    }
}
