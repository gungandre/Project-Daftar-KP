<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembina extends Model
{
    use HasFactory;

    protected $table = "pembina";
    public $fillable = [
        "user_id", "nama_pembina", "alamat", "bagian_kerja", "no_hp", "status"
    ];
}
