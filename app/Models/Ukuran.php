<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ukuran extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
    ];

    public function hijab()
    {
        return $this->belongsTo(Hijab::class);
    }
}
