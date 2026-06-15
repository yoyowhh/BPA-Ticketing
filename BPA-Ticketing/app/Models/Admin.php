<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $table = 'admin';

    protected $fillable = [
        'nama_admin',
        'email',
        'password',
        'role'
    ];

    public function balasan()
    {
        return $this->hasMany(Balasan::class, 'admin_id');
    }

    public function catatanInternal()
    {
        return $this->hasMany(CatatanInternal::class, 'admin_id');
    }
}