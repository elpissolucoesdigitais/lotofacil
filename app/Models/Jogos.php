<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jogos extends Model
{
    use HasFactory;

    protected $table = 'jogos';

    protected $fillable = ['identificador_jogo'];
    protected $casts = [
        'numerojogado' => 'array'
    ];

    public function concursos(){
        return $this->hasMany(Concursos::class);
    }


}
