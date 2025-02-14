<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Models\HostingPlan;
use App\Models\Order;
use App\Models\VpsPlan;

class Dashboard extends Controller
{
    public function dashboard()
    {
        $hosting_plans = HostingPlan::all();
        $vps_plans = VpsPlan::all();
        $orders = Order::all();
        $customers = Customer::all();

        return view('admin.dashboard',compact('hosting_plans', 'vps_plans','orders', 'customers'));
    }
}
