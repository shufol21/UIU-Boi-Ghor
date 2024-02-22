<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rent extends Model
{
    use HasFactory;
    protected $fillable = [

        'name',
        'address',
        'zip',
        'phone',
        'email',
        'price',
        'payment_type',
        'status'
    ];
    public function books(){
        return $this->belongsTo(Book::class,'book_id','id');
    }
}