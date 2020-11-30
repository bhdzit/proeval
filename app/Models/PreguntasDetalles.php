<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PreguntasDetalles extends Model
{
    use HasFactory;
    protected $table='item_detalle';
    protected $primaryKey='ITD_ITEM';


    protected $fillable = [
        'ITD_ITEM',
        'ITD_RESPUESTA',
        'ITD_RETRO_RESPUESTA',
        'ITD_VALOR',
        'ITD_ACTIVO', 
    
    ];
    //public $incrementing = false;

    // In Laravel 6.0+ make sure to also set $keyType
    protected $keyType = 'string';
    const CREATED_AT = 'ITD_FEC_ALTA';
    const UPDATED_AT = 'ITD_FEC_MOD';
}
