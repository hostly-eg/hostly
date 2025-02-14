<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DomainPlan extends Model
{
    use HasFactory;

    protected $table = 'domain_plans';

    protected $fillable = ['extension','price_reNew','price_1_year','price_2_years','price_3_years'];


    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}
