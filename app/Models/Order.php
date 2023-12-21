<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = ['order_status', 'order_date', 'admin_id', 'customer_id', 'payment_method_id', 'order_date', 'name', 'address', 'phone'];
    public $timestamps = false;

    public function paymentMethod()
    {
        return $this->belongsTo(PaymentMethod::class);
    }

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    public function orderDetails()
    {
        return $this->hasMany(Order_Detail::class);
    }

}
