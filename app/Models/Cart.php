<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Products;

class Cart extends Model
{
    use HasFactory;

    protected $fillable = ['user_id','product_id','quantity', 'quantity_type', 'weight_quantity'];

    /**
     * Get the phone associated with the user.
     */
    public function products()
    {
        return $this->hasOne(Products::class, 'id', 'product_id');
    }
}
