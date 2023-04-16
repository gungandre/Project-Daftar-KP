<?php

use App\Models\Magang;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHistroyMahasiswaMagangsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('histroy_mahasiswa_magangs', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Magang::class);
            $table->date("tanggal_penolakan")->nullable();
            $table->longText("keterangan")->nullable();
            $table->string("status_permintaan_pertimbangan")->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('histroy_mahasiswa_magangs');
    }
}
