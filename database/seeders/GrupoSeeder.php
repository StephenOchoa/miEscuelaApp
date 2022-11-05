<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Grupo;

class GrupoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Grupo::create([
            'especialidad_id' => 1,
            'clave'           => '5AVP',
            'turno'           => 1,
            'descripcion'     => 'Grupo de programacion vespertino',
            'semestre'        => 5
        ]);

        Grupo::create([
            'especialidad_id' => 1,
            'clave'           => '5AMP',
            'turno'           => 0,
            'descripcion'     => 'Grupo de programacion matutino',
            'semestre'        => 5
        ]);

        Grupo::create([
            'especialidad_id' => 4,
            'clave'           => '3AVO',
            'turno'           => 0,
            'descripcion'     => 'Grupo de ofimatica matutino',
            'semestre'        => 3
        ]);

        Grupo::create([
            'especialidad_id' => 4,
            'clave'           => '3AMO',
            'turno'           => 1,
            'descripcion'     => 'Grupo de ofimatica vespertino',
            'semestre'        => 3
        ]);



        
    }
}
