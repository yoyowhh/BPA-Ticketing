<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Balasan extends Model
{
    protected $table = 'balasan';

    protected $fillable = [
        'ticket_id',
        'admin_id',
        'pesan',
        'created_at'
    ];

    public function ticket()
    {
        return $this->belongsTo(Ticket::class, 'ticket_id');
    }

    public function admin()
    {
        return $this->belongsTo(Admin::class, 'admin_id');
    }
}
