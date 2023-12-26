<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class payments extends Model
{
    use HasFactory;

    protected $fillable=[
        'order_id',
        'amount',
        'status',
        'type',
        'cardNumber',
        'cvc',
        'exp_month',
        'exp_year',
        'receiver',
        'product_id',
    ];

}
