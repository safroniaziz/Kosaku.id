<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateProduksView extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement("
        CREATE VIEW produks_view AS
        (
            SELECT
                produks.id,
                kelurahans.nm_kelurahan,
                kategoris.nm_kategori,
                kecamatans.nm_kecamatan,
                kotas.nm_kota,
                provinsis.nm_provinsi,
                produks.nm_pemilik,
                produks.nm_vendor,
                produks.jumlah_kamar,
                produks.kamar_kosong,
                produks.luas_kamar,
                produks.alamat_lengkap,
                produks.latitude,
                produks.longitude,
                produks.harga_sewa,
                produks.jenis_kategori,
                produks.jenis_kerja_sama,
                produks.deskripsi,
                produks.foto_thumbnail,
                produks.kamar_mandi_dalam,
                produks.dapur_dalam,
                produks.kamar_mandi_umum,
                produks.dapur_umum,
                produks.wifi,
                produks.ac,
                produks.kasur,
                produks.lahan_parkir,
                produks.listrik,
                produks.air,
                produks.pengamanan,
                produks.jarak_rs_terdekat,
                produks.jarak_damkar,
                produks.jarak_pusat_kota,
                produks.jarak_polisi_terdekat,
                produks.jarak_puskesmas,
                produks.jarak_pasar,
                produks.status,
                produks.created_at,
                produks.area_kampus,
                produks.diskon,
                produks.slug

            FROM produks
            LEFT JOIN kelurahans ON kelurahans.id=produks.kelurahan_id
            LEFT JOIN kecamatans ON kecamatans.id=produks.kecamatan_id
            LEFT JOIN kotas ON kotas.id=produks.kota_id
            LEFT JOIN provinsis ON provinsis.id=produks.provinsi_id
            LEFT JOIN kategoris ON kategoris.id=produks.kategori_id
        )
        ");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement('DROP VIEW IF EXISTS produks_view');
    }
}
