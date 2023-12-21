<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product_Detail extends Model
{
    use HasFactory;
    protected $table = 'product_details';
    protected $fillable = ['configuration_id'];

    public function productDetail()
    {
        return $this->hasMany(Product_Detail::class, 'configuration_id');
    }

    public function configuration()
    {
        return $this->belongsTo(Configuration::class, 'configuration_id');
    }
}
