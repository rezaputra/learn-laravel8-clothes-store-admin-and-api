<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProductGallery extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = ['galleries'];

    protected $fillable = ['product_id', 'path', 'is_default'];

    public function product(){
        return $this->belongsTo(Product::class, 'product_id', 'id');
    }

    public function getPathAttribute($value){
        return url('/storage' . $value);
    }
}
