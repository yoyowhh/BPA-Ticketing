<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    protected $table = 'users';

    protected $primaryKey = 'user_id';

    public $timestamps = true;

    protected $fillable = [
        'nama_lengkap',
        'nim_nip',
        'email',
        'password',
        'status',
        'prodi_unit',
        'created_at'
    ];

    protected $hidden = [
        'password'
    ];
}