<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class nilaiModel extends Model
{
    protected $table = 'nilai';
    protected $fillable = 
    [
        'Usia',
        'Jenis_Kelamin',
        'Berat_Badan',
        'Tinggi_Badan',
        'IMD',
        'Status'
    ];
}
