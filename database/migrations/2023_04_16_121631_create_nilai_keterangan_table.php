<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Nilai;
class CreateNilaiKeteranganTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nilai_keterangan', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Nilai::class);
            $table->string('ket_etika')->nullable();
            $table->string('ket_tugas')->nullable();
            $table->string('ket_absen')->nullable();
            $table->string('ket_tanggung_jawab')->nullable();
            $table->string('ket_kerjasama')->nullable();
            $table->string('ket_inisiatif')->nullable();
            $table->string('ket_skill')->nullable();
            $table->string('ket_total_nilai')->nullable();
            $table->string('ket_total_rata')->nullable();
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
        Schema::dropIfExists('nilai_keterangan');
    }
}
