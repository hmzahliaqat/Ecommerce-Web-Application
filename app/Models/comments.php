<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class comments extends Model
{
    use HasFactory;

    protected $fillable=[
        'user_id',
        'product_id',
        'body',
        'thumbs_up',
        'thumbs_down',
        'reply_of',
        'user_name',

    ];
}
