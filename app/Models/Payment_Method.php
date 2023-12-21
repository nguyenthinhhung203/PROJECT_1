<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment_Method extends Model
{
    use HasFactory;
    protected $table = 'payment_methods';
    protected $fillable = ['name'];

    // Define any relationships or additional properties/methods here if needed.

    // Example of a one-to-many relationship (if your payment method is associated with multiple orders):
    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}
