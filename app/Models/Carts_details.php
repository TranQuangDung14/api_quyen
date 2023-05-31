<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carts_details extends Model
{
    use HasFactory;
    protected $table='da5_cart_details';

    public function cart()
    {
        return $this->belongsTo(Carts::class);
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
    public function size()
    {
        return $this->belongsTo(Product_size::class, 'size_id');
    }

    public function color()
    {
        return $this->belongsTo(Product_color::class, 'color_id');
    }
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    // Cần có những trường bắt buộc phải thay đổi
    protected $fillable = [
        'cart_id',
        'product_id',
        'quantity',
        'discout',
        'price_by_quantity',
        'color_id',
        'size_id'
    ];
}
