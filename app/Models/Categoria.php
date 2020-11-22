<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;

    protected $table='categoria';
    protected $primaryKey='CA_IDENTIFICADOR';
    protected $fillable = [
        'CA_IDENTIFICADOR',
        'CA_NOMBRE',
        'CAT_ACTIVO',
    ];
    public $incrementing = false;

    // In Laravel 6.0+ make sure to also set $keyType
    protected $keyType = 'string';
    const CREATED_AT = 'CA_FEC_ALTA';
    const UPDATED_AT = 'CA_FEC_MOD';

}
