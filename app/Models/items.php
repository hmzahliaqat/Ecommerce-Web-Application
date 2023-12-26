<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class items extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'brand',
        'category',
        'created_by',
        'updated_by',
        'discription',
        'price',
        'dCharges',
        'image',
        'image2',
        'image3',
        'image4',
        'image5',


    ];
}
