<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NilaiKeterangan extends Model
{
    use HasFactory;
    protected $table = 'nilai_keterangan';

    protected $fillable = [
        'ket_etika',
        'ket_tugas',
        'ket_absen',
        'ket_tanggung_jawab',
        'ket_kerjasama',
        'ket_inisiatif',
        'ket_skill',
        'ket_total_nilai',
        'ket_total_rata',
        'nilai_id'
    ];
}
