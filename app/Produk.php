<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    protected $fillable = [
        'provinsi_id',
        'kota_id',
        'kecamatan_id',
        'kelurahan_id',
        'kategori_id',
        'nm_pemilik',
        'nm_vendor',
        'slug',
        'jumlah_kamar',
        'kamar_kosong',
        'luas_kamar',
        'alamat_singkat',
        'alamat_lengkap',
        'latitude',
        'longitude',
        'harga_sewa',
        'jenis_kategori',
        'jenis_kerja_sama',
        'deskripsi',
        'foto_thumbnail',
        'kamar_mandi_dalam',
        'dapur_dalam',
        'kamar_mandi_umum',
        'dapur_umum',
        'wifi',
        'ac',
        'kasur',
        'lemari',
        'lahan_parkir',
        'listrik',
        'air',
        'pengamanan',
        'jarak_rs_terdekat',
        'jarak_damkar',
        'jarak_pusat_kota',
        'jarak_polisi_terdekat',
        'jarak_puskesmas',
        'jarak_pasar',
    ];
}
