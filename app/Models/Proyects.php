<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proyects extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'nombre',
        'link_1',
        'link_2',
        'link_3',
        'link_4',
        'link_5'
    ];
}
