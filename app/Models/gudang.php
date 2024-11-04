<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class gudang extends Model
{
    use HasFactory;

    protected $table = 'gudang';

    protected $fillable = [
        'kode',
        'tipe',
        'barang',
        'harga_jual',
        'harga_beli',
    ];
}
