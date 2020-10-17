<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kelurahan extends Model
{
    protected $fillable = [
        'provinsi_id','kota_id','kecamatan_id','nm_kelurahan'
    ];
}
