<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Magang extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('magang', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->unique();
            $table->unsignedBigInteger('id_pembina')->nullable();
            $table->string('nama_lengkap');
            $table->longText('nim_nis');
            $table->longText('alamat');
            $table->string('no_hp');
            $table->string('email');
            $table->string('password')->nullable();
            $table->string('instansi_pendidikan');
            $table->string('jurusan');
            $table->date('mulai_magang')->nullable();
            $table->date('selesai_magang')->nullable();
            $table->string('foto');
            $table->string('surat_magang')->nullable();
            $table->string('status');
            $table->string('status_desc')->default('Menunggu');
            $table->foreign('id_pembina')->references('id')->on('pembina');
            $table->foreign('user_id')->references('id')->on('users');
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
        //
    }
}
