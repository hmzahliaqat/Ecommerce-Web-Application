<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class commentImages extends Model
{
    use HasFactory;

    protected $fillable=[
        'image1',
        'image2',
        'image3',
        'image4',
        'image5',
        'comment_id',
        'user_id',
    ];
}
