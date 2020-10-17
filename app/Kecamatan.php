<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kecamatan extends Model
{
    protected $fillable = [
        'provinsi_id','kota_id','nm_kecamatan'
    ];
}
