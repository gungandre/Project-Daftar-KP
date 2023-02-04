<?php

namespace App\Models\admin;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pembina extends Model
{
    use HasFactory;

    protected $table = "pembina";
    public $fillable = [
        "user_id", "nama_pembina", "alamat", "bagian_kerja", "no_hp", "status"
    ];
    public $timestamps = false;

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
