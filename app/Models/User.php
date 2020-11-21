<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;
    const CREATED_AT = 'US_FEC_ALTA';
    const UPDATED_AT = 'US_FEC_MOD';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table='usuario';
    protected $primaryKey='US_NUMBER';
    protected $fillable = [
        'US_NOMBRE',
        'US_NOMBRE_2',
        'US_AP_PATERNO',
        'US_AP_MATERNO',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
