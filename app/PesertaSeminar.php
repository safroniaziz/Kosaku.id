<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PesertaSeminar extends Model
{
    protected $fillable = [
        'seminar_id','nm_peserta','nim','prodi','fakultas','universitas'
    ];
}
