<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evaluacion extends Model
{
    use HasFactory;

    protected $table='evaluacion';
    protected $primaryKey='EV_ID';
    protected $fillable = [
        'EV_TITULO',
        'EV_ACTIVO'
       ,
    ];
 
    const CREATED_AT = 'EV_FEC_ALTA';
    const UPDATED_AT = 'EV_FEC_MOD';

}
