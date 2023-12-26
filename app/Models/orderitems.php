<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class orderitems extends Model
{
    use HasFactory;
    protected $fillable=[
        'order_id',
        'oid',
        'product_id',
        'quantity',
        'price',
        'receiver',
        'billing_name',
    ];
}
