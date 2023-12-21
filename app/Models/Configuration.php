<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Specificaltion;

class Configuration extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'price', 'amount', 'product_id'];

    public function specificaltions()
    {
        return $this->hasMany(Specificaltion::class);
    }

    public function configurations()
    {
        return $this->hasMany(Configuration::class);
    }


    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }


    // Trong tệp ProductDetail.php (mô hình ProductDetail)

    public function configuration()
    {
        return $this->belongsTo(Configuration::class, 'product_detail_id');
    }

    public function productDetail()
    {
        return $this->belongsTo(Product_Detail::class, 'product_detail_id');
    }


}
