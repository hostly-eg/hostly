<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DomainSubscription extends Model
{
    use HasFactory;

    protected $table = 'domain_subscriptions';

    protected $fillable = ['dns1','dns2','dns3','dns4','order_id', 'start_date', 'end_date', 'status'];

    protected $casts = [
        'start_date' => 'datetime',
        'end_date' => 'datetime',
    ];

    public function order()
    {
        return $this->belongsTo(Order::class);
    }
}
