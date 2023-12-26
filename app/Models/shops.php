<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class shops extends Model
{
    use HasFactory;
    protected $fillable=[
        'user_id',
        'name',
        'ph',
        'cnic',
        'email',
        'country',
        'state',
        'accHolderName',
        'accNumber',
        'bankName',
        'address',



    ];
}
