<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jogo extends Model
{
    use HasFactory;

    protected $table = 'jogos';

    protected $fillable = ['identificador_jogo', 'concurso_id'];
    protected $casts = [
        'numerojogado' => 'array'
    ];

    public function concurso(){
        return $this->belongsTo(Concurso::class);
    }
}
