<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataItems extends Model
{
    use HasFactory;

    protected $fillable = [
        'tanggal',
        'picker',
        'wilayah',
        'total_picker',
        'kode_toko',
        'nama_toko',
        'bl14_17',
        'bl12_13',
        'bd',
        'krb',
        'aki',
        'oli',
        'botol',
        'kardus',
    ];

    public function harga()
{
    return $this->hasOne(Harga::class, 'item_name', 'item_name');
}
}

