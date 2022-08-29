<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FolhaCaderno extends Model
{
    use HasFactory;

    protected $fillable = [
        'caderno_id', 'name', 'conteudo'
    ];
}
