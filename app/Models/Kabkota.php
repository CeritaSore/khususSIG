<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kabkota extends Model
{
    //
    protected $table = 'kabkota';
    protected $fillable = [
        'nama',
        'alt_nama',
        'latitude',
        'longitude',
        'provinsi_id'
    ];
}
