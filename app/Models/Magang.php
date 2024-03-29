<?php

namespace App\Models;

use App\Models\admin\Pembina;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class
Magang extends Model
{
    use HasFactory;
    protected $table = "magang";

    public $fillable = [
        'user_id',
        'id_pembina',
        'nim_nis',
        'alamat',
        'no_hp',
        'email',
        'status_desc',
        'instansi_pendidikan',
        'jurusan',
        'mulai_magang',
        'selesai_magang',
        'foto',
        'surat_magang',
        'status',
        'id_pembina',
    ];

    public function User()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function Pembina()
    {
        return $this->belongsTo(Pembina::class, 'id_pembina', 'id');
    }
    public function PembinaCopty()
    {
        return $this->belongsTo(Pembina::class, 'id_pembina', 'id');
    }

    public function Nilai()
    {
        return $this->belongsTo(Nilai::class);
    }

    public function HistoryMagang()
    {
        return $this->hasOne(HistroyMahasiswaMagang::class, "magang_id", "id");
    }

}
