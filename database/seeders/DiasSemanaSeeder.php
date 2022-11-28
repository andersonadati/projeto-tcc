<?php

namespace Database\Seeders;
use App\Models\DiasSemana;


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DiasSemanaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\DiasSemana::factory()->create([
            'dia' => 'segunda',
        ]);

        \App\Models\DiasSemana::factory()->create([
            'dia' => 'terça',
        ]);
        \App\Models\DiasSemana::factory()->create([
            'dia' => 'quarta',
        ]);
        \App\Models\DiasSemana::factory()->create([
            'dia' => 'quinta',
        ]);
        \App\Models\DiasSemana::factory()->create([
            'dia' => 'sexta',
        ]);
        \App\Models\DiasSemana::factory()->create([
            'dia' => 'sábado',
        ]);
        \App\Models\DiasSemana::factory()->create([
            'dia' => 'domingo',
        ]);
    }
}
