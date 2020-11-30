<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Preguntas extends Model
{
    use HasFactory;
    protected $table='item';
    protected $primaryKey='ITEM_ID';


    protected $fillable = [
        'ITEM_PREGUNTA',
        'ITEM_SUB_CATEGORIA',
        'ITEM_TIPO_PREGUNTA',
        'ITEM_ACTIVO',
        'ITEM_RETROALIMENTACION',    
    ];
    //public $incrementing = false;

    // In Laravel 6.0+ make sure to also set $keyType
    protected $keyType = 'string';
    const CREATED_AT = 'ITEM_FEC_ALTA';
    const UPDATED_AT = 'ITEM_FEC_MOD';
}
