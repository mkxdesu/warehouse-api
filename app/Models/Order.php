<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['reference', 'status', 'product_id', 'quantity', 'total'];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}