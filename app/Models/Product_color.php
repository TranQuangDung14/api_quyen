<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product_color extends Model
{
    use HasFactory;
    protected $table='product_color';

    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }
    public function cartDetails()
    {
        return $this->hasMany(Carts_details::class, 'color_id');
    }
    public function orderDetails()
    {
        return $this->hasMany(Orders_details::class, 'color_id');
    }
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'product_id',
        'color',
    ];
}
