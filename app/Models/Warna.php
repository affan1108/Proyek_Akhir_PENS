<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Warna extends Model
{
    use HasFactory;

    protected $table = "warnas";
    protected $fillable = [
        'nama',
        'warna',
        'stok',
        'ukuran',
    ];

    public function hijab()
    {
        return $this->belongsTo(Warna::class);
    }

    
}
