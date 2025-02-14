<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Models\DomainSubscription;
use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;

class Profile extends Controller
{
    public function index($token)
    {
        $user = User::with('customer')->where('token', $token)->first();
        $orders = Order::with('plan','domain_plan','vps_plan','vps_subscription','domain_subscription','subscription')
            ->where('customer_id', $user->customer->id)->get();

        return view('user.profile',compact('user','orders'));
    }
    public function update_dns(Request $request,$subs_id)
    {

        try {
            $validData = $request->validate([
                'dns1' => 'required|string|max:255',
                'dns2' => 'required|string|max:255',
                'dns3' => 'required|string|max:255',
                'dns4' => 'required|string|max:255',
            ]);
            $subscription = DomainSubscription::find($subs_id);

            $subscription->update($validData);

            return back()->with('notify', [
                'type' => 'success',
                'content' => 'Dns Updated Successfully!',
            ]);
        } catch (Exception $e) {
            return back()->with('error', 'Failed to update: ' . $e->getMessage());
        }
    }
}
