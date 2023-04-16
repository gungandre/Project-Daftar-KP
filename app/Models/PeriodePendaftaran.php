<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PeriodePendaftaran extends Model
{
    use HasFactory;
    protected $table = "periode_pendaftaran";
    protected $fillable = [
        'jumlah_mahasiswa_daftar',
        'tanggal_buka',
        'tanggal_tutup',
        'status',
        'magang_id'
    ];
}
