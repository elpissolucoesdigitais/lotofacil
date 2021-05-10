<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sorteados extends Model
{
    use HasFactory;

    protected $table = 'sorteados';

    protected $fillable = ['identificador', 'ns1', 'ns2', 'ns3', 'ns4', 'ns5', 'ns6', 'ns7', 'ns8',
    'ns9', 'ns10', 'ns11', 'ns12','ns13','ns14','ns15','ns16','ns17','ns18','ns19','ns20'];
}
