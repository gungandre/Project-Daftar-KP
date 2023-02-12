<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Absen extends Model
{
    use HasFactory;
    protected $table = 'absensi';
    protected $fillable=[
        'user_id',
        'nama_lengkap',
        'instansi_pendidikan',
        'tanggal',
        'kehadiran'
    ];
}
