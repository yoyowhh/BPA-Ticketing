<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Ticket extends Model
{
    protected $table = 'tickets';

    protected $fillable = [
        'user_id',
        'kategori_id',
        'nomor_ticket',
        'deskripsi',
        'status',
        'tanggal_dibuat',
        'tanggal_selesai',
        'created_at',
        'updated_at'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'kategori_id');
    }

    public function balasan()
    {
        return $this->hasMany(Balasan::class, 'ticket_id');
    }

    public function catatanInternal()
    {
        return $this->hasMany(CatatanInternal::class, 'ticket_id');
    }
}