<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $table = 'orders';

    protected $fillable = ['name','phone', 'email','transaction_number','customer_id','product','hosting_plan_id','domain_plan_id','vbs_plan_id','num_months','disCount','total','image_path','type'];

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
    public function plan()
    {
        return $this->belongsTo(HostingPlan::class , 'hosting_plan_id', 'id');
    }
    public function subscription()
    {
        return $this->hasOne(Subscription::class);
    }
    public function vps_plan()
    {
        return $this->belongsTo(VpsPlan::class , 'vps_plan_id', 'id');
    }
    public function vps_subscription()
    {
        return $this->hasOne(VpsSubscription::class);
    }
    public function domain_plan()
    {
        return $this->belongsTo(DomainPlan::class , 'domain_plan_id', 'id');
    }
    public function domain_subscription()
    {
        return $this->hasOne(DomainSubscription::class);
    }
}
