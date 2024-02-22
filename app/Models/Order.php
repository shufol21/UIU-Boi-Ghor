<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = [

        'name',
        'address',
        'shipping_address',
        'zip',
        'phone',
        'email',
        'traking_no',
        'total_price',
        'payment_type',
        'status'
    ];
    public function orderItems(){
        return $this->hasMany(OrderItems::class);
    }
}
