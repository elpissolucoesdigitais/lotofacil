<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cartoes extends Model
{
    use HasFactory;

    protected $table = 'cartoes';

    protected $fillable = ['identificador', 'nomerojogado'];

}
