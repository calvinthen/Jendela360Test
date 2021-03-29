<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Mobil extends Model
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'nama',
        'harga',
        'stock',
    ];

    public function Penjualan()
    {
        return $this->hasMany(Penjualan::class, 'id_mobil', 'id');
    }
}
