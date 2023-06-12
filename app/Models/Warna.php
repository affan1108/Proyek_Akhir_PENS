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
        'hijab_id',
        'warna',
        'stok',
        'ukuran',
        'harga',
        'foto',
    ];

    public function getPathAttribute($value)
    {
        return asset('storage/' . $value);
    }

    public function hijab()
    {
        return $this->belongsTo(Hijab::class);
    }

    
}
