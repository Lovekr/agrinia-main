<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\OrderItems;

class Order extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'user_id',
        'payment_id',
        'billing_address_id',
        'total',
        'sub_total',
        'tax',
        'shipping_charge',
        'payment_mode',
        'delivery_vendor'
    ];

     /**
     * Get the comments for the blog post.
     */
    public function orderItems()
    {
        return $this->hasMany(OrderItems::class);
    }
}
