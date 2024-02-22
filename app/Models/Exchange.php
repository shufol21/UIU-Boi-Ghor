<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exchange extends Model
{
    use HasFactory;
    protected $table = 'exchanges';
    protected $fillable = [
        'username',
        'book_name',
        'description',
        'image',
        'phone',
        'address',
        'status'
    ];
}