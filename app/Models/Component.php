<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Component extends Model
{
    use HasFactory, Notifiable;
    protected $table = 'component';
    protected $fillable = [
        'nama_barang', 'harga_barang', 'link_shopee', 'gambar',
    ];
}
