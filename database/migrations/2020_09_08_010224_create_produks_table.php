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
            $table->unsignedBigInteger('provinsi_id')->constrained('provinsis');;
            $table->unsignedBigInteger('kota_id')->constrained('kotas');;
            $table->unsignedBigInteger('kecamatan_id')->constrained('kecamatans');;
            $table->unsignedBigInteger('kelurahan_id')->constrained('kelurahans');;
            $table->string('nm_pemilik');
            $table->string('nm_vendor');
            $table->string('slug');
            $table->bigInteger('jumlah_kamar');
            $table->bigInteger('kamar_kosong');
            $table->string('luas_kamar');
            $table->text('alamat_lengkap');
            $table->string('latitude');
            $table->string('longitude');
            $table->string('harga_sewa');
            $table->string('jenis_kategori');
            $table->enum('jenis_kerja_sama',['silver','gold','premium']);
            $table->text('deskripsi');
            $table->string('foto_thumbnail');
            $table->enum('kamar_mandi_dalam',['0','1']);
            $table->enum('dapur_dalam',['0','1']);
            $table->enum('kamar_mandi_umum',['0','1']);
            $table->enum('dapur_umum',['0','1']);
            $table->enum('wifi',['0','1']);
            $table->enum('ac',['0','1']);
            $table->enum('kasur',['0','1']);
            $table->enum('lemari',['0','1']);
            $table->enum('lahan_parkir',['0','1']);
            $table->enum('listrik',['0','1']);
            $table->enum('air',['0','1']);
            $table->enum('pengamanan',['0','1']);
            $table->string('jarak_rs_terdekat')->nullable();
            $table->string('jarak_damkar')->nullable();
            $table->string('jarak_pusat_kota')->nullable();
            $table->string('jarak_polisi_terdekat')->nullable();
            $table->string('jarak_puskesmas')->nullable();
            $table->string('jarak_pasar')->nullable();
            $table->enum('status',['1','0'])->default('1');
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
