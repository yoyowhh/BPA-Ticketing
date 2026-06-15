<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    protected $table = 'kategori';

    protected $fillable = [
        'nama_kategori'
    ];

    public function tickets()
    {
        return $this->hasMany(Ticket::class, 'kategori_id');
    }
}
