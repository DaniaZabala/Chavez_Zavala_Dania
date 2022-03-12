<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class cod_post extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        include 'codigos_postales.php';
        foreach($codigos_postales as $clave){
        DB::table('codigo_postal')->insert([
        'Id' => $clave["Id"],
        'codigo' => $clave["codigo"],
        'asentamiento' => $clave["asentamiento"],
        'tipo_asenta' => $clave["tipo_asenta"],
        'municipio' => $clave["municipio"],
        'estado' => $clave["estado"],
        'ciudad' => $clave["ciudad"],
        ]);
        }
    }
}