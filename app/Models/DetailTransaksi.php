<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DetailTransaksi extends Model
{
    protected $table = 'detail_transaksi';
    protected $fillable = ['transaksi_id', 'product_id', 'jumlah', 'harga_satuan', 'subtotal'];
}
