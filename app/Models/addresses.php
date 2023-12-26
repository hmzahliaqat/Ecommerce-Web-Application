<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class addresses extends Model
{
    use HasFactory;

    protected $fillable=[

        'name',
        'mob',
        'flat',
        'landmark',
        'city',
        'zipcode',
        'state',
        'type',
        'user_id',

    ];
}
