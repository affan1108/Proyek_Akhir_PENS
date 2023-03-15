<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Warna extends Model
{
    use HasFactory;

    protected $table = "warnas";
    protected $guarded = []; 
    protected $fillable = [
        'produk_id',
        'warna',
        'stok',
        'ukuran',
    ];

    public function produk()
    {
        return $this->belongsTo(Hijab::class);
    }

    
}
