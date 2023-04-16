<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nilai extends Model
{
    use HasFactory;

    protected $table = "nilai";
    protected $fillable = [
        'etika',
        'tugas',
        'absen',
        'tanggung_jawab',
        'kerjasama',
        'inisiatif',
        'skill',
        'total_nilai',
        'total_rata',
        'keterangan',
        'ubah_nilai',
        'magang_id'
    ];

    public function magang()
    {
        return $this->belongsTo(Magang::class,'magang_id','id');
    }
    public function nilaiKet(){
        return $this->hasOne(NilaiKeterangan::class,'nilai_id','id' );
    }
}
