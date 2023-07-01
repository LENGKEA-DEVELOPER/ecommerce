<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class phone extends Model
{
    use HasFactory;
    protected $fillable=[
     'name',
     'price',
     'color',
     'storage',
     'ram',
     'chip',
     'screen',
     'camera',
     'camera2',
     'battery',
     'battery_type',
     'resolution',
     'category',
     'promotion',
     'image',
     'brand'
    ];

}
