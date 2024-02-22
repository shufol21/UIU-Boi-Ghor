<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
    protected $table = 'carts';
    protected $fillable = [
        'user_id',
        'book_id',
        'qty'
    ];
    public function books(){
        return $this->belongsTo(Book::class,'book_id','id');
    }
}