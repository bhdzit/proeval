<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subcategorias extends Model
{
    use HasFactory;
    protected $table='subcategoria';
    protected $primaryKey='SB_ID';


    protected $fillable = [
 'SB_ID',
 'SB_CVE_CATEGORI',
 'SB_DESCRIPCION',
 'SB_ACTIVO',    
    ];
    //public $incrementing = false;

    // In Laravel 6.0+ make sure to also set $keyType
    protected $keyType = 'string';
    const CREATED_AT = 'SB_FEC_ALTA';
    const UPDATED_AT = 'SB_FEC_MOD';
}
