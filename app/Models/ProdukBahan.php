<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProdukBahan extends Model
{
    use HasFactory;
    protected $table = 'produk_bahan';
    protected $guarded = [];

    public function bahan(){
        return $this->belongsTo(Bahan::class,'bahan_id','id');
    }

    public function produk(){
        return $this->belongsTo(Produk::class,'produk_id','id');
    }
}
