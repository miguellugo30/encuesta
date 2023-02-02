<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class datos_encuesta extends Model
{
    use HasFactory;

    /**
     * Campos que pueden ser modificados
     */
    protected $fillable = [
        'pregunta1',
        'pregunta2',
        'pregunta3',
        'pregunta4',
        'pregunta5',
        'pregunta5-1',
        'pregunta5-2',
        'pregunta6',
        'pregunta7',
        'pregunta8',
    ];
    /**
     * Nombre de la tabla
     */
    protected $table = 'datos_encuesta';
}
