<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Products;

class OrderItems extends Model
{
    use HasFactory;

    protected $fillable = [
        'order_id',
        'product_id',
    ];

     /**
     * Get the comments for the blog post.
     */
    public function products()
    {
        return $this->hasOne(Products::class, 'id', 'product_id');
    }

}
