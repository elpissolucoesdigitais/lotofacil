<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Concursos extends Model
{
    use HasFactory;

    protected $table = 'concursos';

    protected $fillable = ['identificador_concurso', 'jogo_id'];
    protected $casts = [
        'numerosorteado' => 'array'
    ];

}
