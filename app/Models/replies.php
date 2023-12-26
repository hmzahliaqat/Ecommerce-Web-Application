<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class replies extends Model
{
    use HasFactory;

    protected $fillable=[

        'comment_id',
        'body',
        'thumbs_up',
        'thumbs_down',
        'user_id',
        'user_name'


    ];
}
