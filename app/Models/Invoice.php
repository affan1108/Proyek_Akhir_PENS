<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Invoice extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = "invoices";
    protected $guarded = []; 

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function keranjang()
    {
        return $this->belongsTo(Keranjang::class);
    }

    public function cart()
    {
        return $this->hasMany(Keranjang::class);
    }

    public function ongkir()
    {
        return $this->belongsTo(Ongkir::class);
    }

    public function voucher()
    {
        return $this->belongsTo(Voucher::class);
    }

    public function payment()
    {
        return $this->belongsTo(Payment::class);
    }

    protected static function boot()
    {
        parent::boot();

        static::deleting(function ($model) {
            $model->keranjang()->delete();
            $model->payment()->delete();
        });
    }
}
