<?php

use App\Models\admin\Pembina;
use App\Models\DivisiModel;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTablePembinaDivisi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_pembina_divisi', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Pembina::class);
            $table->foreignIdFor(DivisiModel::class);
            $table->string("ruangan")->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('table_pembina_divisi');
    }
}
