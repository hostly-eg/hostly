<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VpsSubscription extends Model
{
    use HasFactory;

    protected $table = 'vps_subscriptions';

    protected $fillable = ['user','password','ip','order_id', 'start_date', 'end_date', 'status'];

    protected $casts = [
        'start_date' => 'datetime',
        'end_date' => 'datetime',
    ];

    public function order()
    {
        return $this->belongsTo(Order::class);
    }
}
