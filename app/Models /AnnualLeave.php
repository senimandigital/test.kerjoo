<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnnualLeave extends Model
{
    use HasFactory;

    protected $table = 'cuti';

    protected $fillable = [
        'tanggal_mulai',
        'tanggal_berakhir',

    ];
}
