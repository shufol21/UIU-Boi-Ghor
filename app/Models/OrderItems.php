<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderItems extends Model
{
    use HasFactory;
    protected $fillable = [

        'order_id',
        'book_id',
        'qty',
        'price'
    ];
    public function books(){
        return $this->belongsTo(Book::class,'book_id','id');
    }
}