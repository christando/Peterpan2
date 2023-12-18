<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pesanan extends Model
{
    use HasFactory;

    protected $table = 'pesanan';

    protected $fillable = [
        'tujuan',
        'jenis_mobil',
        'kapasitas',
        'tanggal_berangkat',
        'tanggal_sampai',
    ];
}
