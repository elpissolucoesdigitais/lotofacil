<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cartoes extends Model
{
    use HasFactory;

    protected $table = 'cartoes';

    protected $fillable = ['identificador', 'nj1', 'nj2', 'nj3', 'nj4', 'nj5', 'nj6', 'nj7', 'nj8',
    'nj9', 'nj10', 'nj11', 'nj12','nj13','nj14','nj15','nj16','nj17','nj18','nj19','nj20'];

}
