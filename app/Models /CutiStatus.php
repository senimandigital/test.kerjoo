<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CutiStatus extends Model
{
    use HasFactory;

    protected $table = 'cuti_status'; 

    protected $fillable = [
        'judul',
        'keterangan',

    ];
}
