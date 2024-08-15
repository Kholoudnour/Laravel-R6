<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class car extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable =[
    'carTitle',
    'description',
    'price',
    'published',
    'category_id',
    'image',
];
public function category(){
    return $this ->belongsTo((category::class));
 
}
}
