<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Materias extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'agenda_id', 'dia_semana'
    ];

    public function materias(){
        return $this->belongsTo(Agenda::class, "agenda_id");
    }
}
