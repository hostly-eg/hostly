<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\HostingPlan;
use App\Models\VpsPlan;
use App\Models\Partner;
use App\Models\ClientTestmonial;
class Home extends Controller
{
    public function index()
    {
        $user = auth()->user();
        $plans = HostingPlan::take(3)->get();
        $vps = VpsPlan::take(3)->get();
        $partners = Partner::get();
        $testmonials = ClientTestmonial::get();
        return view('user.home', compact('user', 'plans','vps','partners','testmonials'));
    }
}
