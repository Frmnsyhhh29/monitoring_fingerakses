<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FingerAccess extends Model
{
    protected $fillable = [
        'unit',
        'kode_ruangan',
        'nama_ruangan',
        'ip_address',
        'status',
        'last_checked_at',
    ];
}