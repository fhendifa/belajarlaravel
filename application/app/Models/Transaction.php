<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;
    protected $fillable=['bank_id', 'kurir_id', 'no_invoice', 'alamat', 'total', 'struk', 'status_transaction', 'user_id'];
    public function bank()
    {
        return $this->belongsTo('App\Models\Bank');
    }
    public function kurir()
    {
        return $this->belongsTo('App\Models\Kurir');
    }
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}
