<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Usuario extends Authenticable
{
    use HasFactory, Notifiable;
    protected $guarded = [];

    /**
     * The attributes thay should be hidden for arrays.
     * 
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
    
    //creamos relacion de usuarios con roles
    public function roles()
    {
        return $this->belongsToMany(Rol::class, 'usuarios_roles', 'usuarios_id', 'roles_id');
    }
}
