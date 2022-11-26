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
            'agenda_id' => 1,
        ]);

        \App\Models\DiasSemana::factory()->create([
            'dia' => 'terça',
            'agenda_id' => 1,
        ]);
        \App\Models\DiasSemana::factory()->create([
            'dia' => 'quarta',
            'agenda_id' => 1,
        ]);
        \App\Models\DiasSemana::factory()->create([
            'dia' => 'quinta',
            'agenda_id' => 1,
        ]);
        \App\Models\DiasSemana::factory()->create([
            'dia' => 'sexta',
            'agenda_id' => 1,
        ]);
        \App\Models\DiasSemana::factory()->create([
            'dia' => 'sábado',
            'agenda_id' => 1,
        ]);
        \App\Models\DiasSemana::factory()->create([
            'dia' => 'domingo',
            'agenda_id' => 1,
        ]);
    }
}
