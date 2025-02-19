<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class nilaiModel extends Model
{
    protected $table = 'nilai';
    protected $fillable = 
    [
        'IPK', 
        'Jumlah_SKS', 
        'kehadiran', 
        'kelulusan'
    ];
}
