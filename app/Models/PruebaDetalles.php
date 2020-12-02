<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PruebaDetalles extends Model
{
    use HasFactory;
    protected $table='prueba_detalle';
    protected $primaryKey='PR_ID';
    protected $fillable = [
    'PD_RESP_ITEM_DETALLE',
    'PR_BY_USER'
    ];
 
    const CREATED_AT = 'PD_FEC_ALTA';
    const UPDATED_AT = 'PD_FEC_MOD';
}
