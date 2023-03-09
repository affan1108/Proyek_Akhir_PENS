<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;

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

    public function ongkir()
    {
        return $this->belongsTo(Ongkir::class);
    }

    public function voucher()
    {
        return $this->belongsTo(Voucher::class);
    }
}
