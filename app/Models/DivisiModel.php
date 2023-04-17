<?php

namespace App\Models;

use App\Models\admin\Pembina;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DivisiModel extends Model
{
    use HasFactory;

    protected $table = "table_divisi";
    protected $fillable = [
        "nama_divisi",
        "created_at",
        "updated_at"
    ];

    public function pembina()
    {
        return $this->belongsToMany(Pembina::class, 'table_pembina_divisi', 'divisi_model_id', 'pembina_id')->withPivot("ruangan");
    }
    public function pembinaCopy()
    {
        return $this->hasMany(Pembina::class);
    }
}
