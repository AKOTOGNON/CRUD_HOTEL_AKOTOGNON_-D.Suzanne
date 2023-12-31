<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    use HasFactory;
     protected $fillable = [
        'nom',
        'description',
        'nom_chambre',
        'prix',
        'nombre_lit',
        'adulte_max',
        'enfant_max',
        'atribus',
        'statu',
    ];
}
