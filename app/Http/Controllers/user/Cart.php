<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\HostingPlan;
use App\Models\VpsPlan;

class Cart extends Controller
{
    public function index($plan_id,$subs_id)
    {
        $plan = HostingPlan::findOrFail($plan_id);

        return view('user.cart', compact('plan','subs_id'));
    }
    public function vps($plan_id,$subs_id)
    {
        $plan = VpsPlan::findOrFail($plan_id);

        return view('user.cart-vps', compact('plan','subs_id'));
    }
}
