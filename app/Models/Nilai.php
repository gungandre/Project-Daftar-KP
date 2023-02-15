<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nilai extends Model
{
    use HasFactory;

    protected $table = "nilai";
    protected $fillable = [
        'magang_id',
        'nilai',
        'keterangan'
    ];

    public function magang()
    {
        return $this->belongsTo(Magang::class);
    }
}
