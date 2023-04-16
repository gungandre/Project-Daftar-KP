<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HistroyMahasiswaMagang extends Model
{
    use HasFactory;

    protected $fillable = [
        "tanggal_penolakan",
        "keterangan",
        "status_permintaan_pertimbangan"
    ];

    public $timestamps = false;

    public function Magang()
    {
        return $this->belongsTo(Magang::class);
    }
}
