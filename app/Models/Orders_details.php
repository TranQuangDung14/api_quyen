<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orders_details extends Model
{
    use HasFactory;
    protected $table='da5_order_details';

    public function order()
    {
        // return $this->belongsTo(Order::class);
        return $this->belongsTo(Order::class);
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
    protected $fillable = [
        'order_id',
        'product_id',
        'price',
        'quantity',
        'discout',
        'color_id',
        'size_id'
        // 'status',
    ];
}
