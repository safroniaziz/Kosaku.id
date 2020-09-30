<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFasilitasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fasilitas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('produk_id')->constrained('produks');;
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
        Schema::dropIfExists('fasilitas');
    }
}
