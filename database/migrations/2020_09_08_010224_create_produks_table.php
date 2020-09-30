<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProduksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produks', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('kategori_id')->constrained('kategoris');;
            $table->string('nm_pemilik');
            $table->string('nm_vendor');
            $table->string('slug');
            $table->bigInteger('jumlah_kamar');
            $table->string('luas_kamar');
            $table->string('alamat_lengkap');
            $table->string('latitude');
            $table->string('longitude');
            $table->string('harga_sewa');
            $table->enum('jenis_kostan',['putri,','putra','campuran']);
            $table->enum('jenis_kerja_sama',['silver','gold','premium']);
            $table->string('deskripsi');
            $table->string('foto_thumbnail');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produks');
    }
}
