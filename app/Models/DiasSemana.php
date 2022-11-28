<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DiasSemana extends Model
{
    use HasFactory;
    protected $fillable = [
        'dia'
    ];
    protected $table = "dias_semana";
}
