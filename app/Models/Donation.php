<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donation extends Model
{
    use HasFactory;
    protected $table = 'donations';
    protected $fillable = [
        'username',
        'category_name',
        'book_name',
        'author_name',
        'description',
        'pickup',
        'dropdate',
        'image',
        'received'
    ];
}