<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Audiobook extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'author_name',
        'image',
        'file'
    ];
}