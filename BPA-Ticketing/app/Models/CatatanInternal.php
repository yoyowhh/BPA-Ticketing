<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CatatanInternal extends Model
{
    protected $table = 'catatan_internal';

    protected $fillable = [
        'ticket_id',
        'admin_id',
        'catatan',
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