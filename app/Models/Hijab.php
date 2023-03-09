<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hijab extends Model
{
    use HasFactory;

    protected $table = "hijabs";
    protected $guarded = []; 

    protected $fillable = [
        'nama',
        'foto',
        'warna',
        // 'ukuran',
        'harga',
        'deskripsi',
    ];

    // protected $casts = [
    //     'warna' => 'array',
    // ];

    public function warna()
    {
        return $this->hasMany(Warna::class, 'warna');
    }

    public function ukuran()
    {
        return $this->hasMany(Ukuran::class);
    }

    public function images()
    {
        return $this->hasMany(Image::class);
    }

    public function keranjang()
    {
        return $this->hasMany(Keranjang::class);
    }
}
