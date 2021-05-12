<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sorteados extends Model
{
    use HasFactory;

    protected $table = 'sorteados';

    protected $fillable = ['identificador'];
    protected $casts = [
        'numerosorteado' => 'array'
    ];

}
