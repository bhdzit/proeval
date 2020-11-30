<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EvaluacionDetalles extends Model
{
    use HasFactory;
    protected $table='evaluacion_detalle';
    protected $primaryKey='ED_EVALUACION';
    protected $fillable = [
        
        'ED_NUMERO_ITEMS',
        'ED_FECHA_EVAUACION',
        'PR_HORA_INICIO'
       ,
    ];
    protected $dates = ['ED_FECHA_EVAUACION', 'PR_HORA_INICIO'];
    const CREATED_AT = 'ED_FEC_ALTA';
    const UPDATED_AT = 'ED_FEC_MOD';
}
