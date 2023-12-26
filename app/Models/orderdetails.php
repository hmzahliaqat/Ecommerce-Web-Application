<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class orderdetails extends Model
{
    use HasFactory;
    protected $fillable=[
        'fullname',
        'phone',
        'address1',
        'city',
        'state',
        'zipcode',
        'order_id',
    ];
}
