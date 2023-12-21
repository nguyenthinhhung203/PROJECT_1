<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order_Detail extends Model
{
    use HasFactory;

    protected $table = 'order_details';

    protected $fillable = [
        'amount',
        'unit_price',
        'order_id',
        'product_detail_id',
    ];


    public function order()
    {
        return $this->belongsTo(Order::class);
    }

    public function productDetail()
    {
        return $this->belongsTo(ProductDetail::class);
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
