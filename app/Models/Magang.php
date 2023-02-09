<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Magang extends Model
{
    use HasFactory;
    protected $table = "magang";

    public $fillable = [
        'user_id',
        'id_pembina',
        'nama_lengkap',
        'nim_nis',
        'alamat',
        'no_hp',
        'email',
        'password',
        'jurusan',
        'mulai_magang',
        'selesai_magang',
        'foto',
        'surat_magang',
        'status',
        'id_pembina',
        'user_id'
    ];
}
