<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HostingPlan extends Model
{
    use HasFactory;

    protected $table = 'hosting_plans';

    protected $fillable = ['name','description', 'price_reNew','price_1_month','price_1_year','price_2_years','price_3_years','features_included','features_not_included'];

    protected $casts = [
        'features_included' => 'array',
        'features_not_included' => 'array',
    ];

    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}
