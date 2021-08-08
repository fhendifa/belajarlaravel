<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable= ['category_id', 'nama_barang', 'harga_barang', 'stock_barang', 'deskripsi_barang'];
    public function category(){
        return $this->belongsTo('App\Models\Category');
    }
    public function photo()
    {
        return $this->hasOne('App\Models\Photo');
    }
}
