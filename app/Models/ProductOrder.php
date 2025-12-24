<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductOrder extends Model
{
    //
    protected $fillable = [
        'user_id',
        'name',
        'phone',
        'shipping_address',
        'items',
        'total',
        'status',
        'method',
        'is_paid',
        'payment_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
