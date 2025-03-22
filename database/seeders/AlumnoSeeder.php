<?php

namespace Database\Seeders;

use App\Models\Alumno;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AlumnoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Alumno::factory()->count(10)->create();

        Alumno::make([
            'name' => 'Juan',
            'email' => 'algo',
            'fecha_nac' => '03-02-01',
            'city' => 'Barcelona',
        ]);

        DB::table('alumnos')->insert([
            'name' => 'Mike',
            'email' => 'algo2',
            'fecha_nac' => '03-02-01',
            'city' => 'Madrid',
        ]);
    }
}
