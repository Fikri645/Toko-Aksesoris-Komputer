<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pesanan extends Model
{
    protected $fillable = [
        'user_id', 'total_harga', 'status', 'kode_unik', 'kode_pemesanan'
    ];

    public function pesanan_details()
    {
        return $this->hasMany(PesananDetail::class, 'pesanan_id', 'id');
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
