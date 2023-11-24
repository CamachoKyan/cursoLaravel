<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Alumno;

class AlumnoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Alumno::create([
            'nombre'    =>'David',
            'edad'  =>10,
            'nc'    =>'213213',
            'sexo'  =>'1'
        ]);
        Alumno::create([
            'nombre'    =>'Alan',
            'edad'  =>14,
            'nc'    =>'213213',
            'sexo'  =>'1'
        ]);
        Alumno::create([
            'nombre'    =>'Julio',
            'edad'  =>17,
            'nc'    =>'213213',
            'sexo'  =>'1'
        ]);
    }
}