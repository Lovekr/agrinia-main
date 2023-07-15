<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BillingAddress extends Model
{
    use HasFactory;

     /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'order_id',
        'user_id',
        'first_name',
        'last_name',
        'company_name',
        'country',
        'city',
        'zip_code',
        'mobile',
        'email',
        'address_street_name',
        'address_appartment',
        'special_notes',
        'type'
    ];

}
