<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaymentDetails extends Model
{
    use HasFactory;

    protected $fillable = [
        'order_id',
        'provider_payment_id',
        'amount',
        'provider',
        'status',
    ];
}
