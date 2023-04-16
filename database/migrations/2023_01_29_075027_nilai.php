<?php

use App\Models\Magang;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Nilai extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nilai', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Magang::class);
            $table->double('etika')->nullable();
            $table->double('tugas')->nullable();
            $table->double('absen')->nullable();
            $table->double('tanggung_jawab')->nullable();
            $table->double('kerjasama')->nullable();
            $table->double('inisiatif')->nullable();
            $table->double('skill')->nullable();
            $table->double('total_nilai')->nullable();
            $table->double('total_rata')->nullable();
            $table->string('keterangan')->nullable();
            $table->string('ubah_nilai')->nullable();
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
