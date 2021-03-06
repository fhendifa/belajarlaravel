<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Photo extends Model
{
    use HasFactory;
    protected $fillable=['nama_foto', 'status', 'product_id'];
    public function product()
    {
        return $this->belongsTo('App\Models\Product');
    }
}
