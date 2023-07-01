<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class follow_us extends Model
{
    use HasFactory;
    protected $fillable=[
        'name',
        'url',
        'image'
    ];
}
