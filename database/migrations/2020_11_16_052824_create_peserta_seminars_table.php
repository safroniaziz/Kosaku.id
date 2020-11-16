<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePesertaSeminarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('peserta_seminars', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('seminar_id')->constrained('seminars');
            $table->string('nm_peserta');
            $table->string('nim');
            $table->string('prodi');
            $table->string('fakultas');
            $table->string('universitas');
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
        Schema::dropIfExists('peserta_seminars');
    }
}
