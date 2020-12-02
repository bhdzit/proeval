<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prueba extends Model
{
    use HasFactory;
    protected $table='prueba';
    protected $primaryKey='PR_ID';
    protected $fillable = [
    'PR_USUARIO',
    'PR_EVALUACION'
    ];
 
    const CREATED_AT = 'PR_FEC_ALTA';
    const UPDATED_AT = 'PR_FEC_MOD';
}
