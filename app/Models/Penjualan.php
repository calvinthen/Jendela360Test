<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penjualan extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_pembeli',
        'email_pembeli',
        'nomor_telepon',
        'id_mobil',
    ];

    public function Mobil()
    {
        return $this->belongsTo(Mobil::class, 'id_mobil', 'id');
    }
}
