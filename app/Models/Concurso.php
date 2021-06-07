<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Concurso extends Model
{
    use HasFactory;

    protected $table = 'concursos';

    protected $fillable = ['identificador_concurso'];
    protected $casts = [
        'numerosorteado' => 'array'
    ];

    public function jogo()
    {
        return $this->hasOne(Jogo::class);
    }

    public function jogos(){
        return $this->hasMany(Jogo::class);
    }
}
