<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class obat extends Model
{
    protected $fillable = ['nama_obat', 'harga', 'stok', 'expired_date', 'production_date'];
}
