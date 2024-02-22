<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    protected $table = 'books';
    protected $fillable = [
        'cat_id',
        'name',
        'author_name',
        'short_description',
        'long_description',
        'original_price',
        'selling_price',
        'image',
        'qty',
        'status',
        'trending'
    ];

    public function category(){
        return $this->belongsTo(Category::class, 'cat_id','id');
    }
}
