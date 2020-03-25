<?php

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
        factory('App\Subject', 12)->create();
        echo "Materias creadas.";        
        factory('App\Student', 40)->create();
        echo "Estudiantes creados.";
        factory('App\Note', 200)->create();
        echo "Notas creadas.";
    }
}
