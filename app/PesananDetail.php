<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PesananDetail extends Model
{

    protected $fillable = [
        'product_id', 'pesanan_id', 'jumlah_pesanan', 'total_harga'
    ];

    public function pesanan()
    {
        return $this->belongsTo(Pesanan::class, 'pesanan_id', 'id');
    }
    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id', 'id');
    }
}
