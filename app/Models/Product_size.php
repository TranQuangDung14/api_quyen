<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product_size extends Model
{
    use HasFactory;
    protected $table='product_size';

    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }
    public function cartDetails()
    {
        return $this->hasMany(Carts_details::class, 'size_id');
    }
    public function orderDetails()
    {
        return $this->hasMany(Orders_details::class, 'size_id');
    }
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'product_id',
        'size',
    ];
}
