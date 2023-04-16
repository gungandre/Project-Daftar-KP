<?php

namespace App\Models\admin;

use App\Models\DivisiModel;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pembina extends Model
{
    use HasFactory;

    protected $table = "pembina";
    public $fillable = [
        "user_id",
        "nama_pembina",
        "alamat",
        "bagian_kerja",
        "no_hp",
        "status",
        "create_at",
        "updated_at"
    ];
    public $timestamps = false;

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function divisi()
    {
        return $this->belongsToMany(DivisiModel::class, 'table_pembina_divisi', 'pembina_id', 'divisi_model_id')->withPivot("ruangan");
    }
}
