<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Classtop extends Model
{
    use HasFactory, SoftDeletes;
protected $table = 'classes';
    protected $fillable = [
        'classname',
        'capacity', 
        'isfulled', 
        'price', 
        'timefrom', 
        'timeto', 
        'image', 
    ];
}
