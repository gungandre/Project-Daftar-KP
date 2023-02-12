<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kegiatan extends Model
{
    use HasFactory;
    protected $table = 'kegiatan';
    protected $fillable = [
        'user_id',
        'nama_lengkap',
        'instansi_pendidikan',
        'tanggal',
        'kehadiran',
        'file_kegiatan',
        'logbook_kegiatan',
        'status'
    ];

    public function User()
    {
        return $this->belongsTo(User::class);
    }

    public function getRouteKeyName()
    {
        return 'tanggal';
    }
}
