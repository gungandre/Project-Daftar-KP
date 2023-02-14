<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KegiatanMagang extends Model
{
    use HasFactory;

    protected $table = "kegiatan";
    protected $fillable = [
        "status"
    ];

    public function User()
    {
        return $this->hasOne(User::class, 'user_id', 'id');
    }
}
