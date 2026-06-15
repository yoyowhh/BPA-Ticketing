<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Database\Factories\UserFactory;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Attributes\Hidden;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

#[Fillable(['name', 'email', 'password'])]
#[Hidden(['password', 'remember_token'])]
class User extends Model
{
    protected $table = 'users';

    protected $fillable = [
        'nama_lengkap',
        'nim_nip',
        'email',
        'status',
        'password',
        'prodi_unit',
        'created_at'
    ];

    public function tickets()
    {
        return $this->hasMany(Ticket::class, 'user_id');
    }
}