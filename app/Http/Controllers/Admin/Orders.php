<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\DomainSubscription;
use App\Models\Order;
use App\Models\Subscription;
use App\Models\VpsSubscription;
use Illuminate\Http\Request;

class Orders extends Controller
{
    public function index(){

        $orders = Order::with([
            'customer.user',
            'plan',
            'domain_plan',
            'vps_plan',
            'vps_subscription' => function ($query) {
                $query->where('status', 'pending');
            },
            'domain_subscription' => function ($query) {
                $query->where('status', 'pending');
            },
            'subscription' => function ($query) {
                $query->where('status', 'pending');
            }
        ])->whereHas('subscription', function ($query) {
            $query->where('status', 'pending');
        })
            ->orWhereHas('vps_subscription', function ($query) {
                $query->where('status', 'pending');
            })
            ->orWhereHas('domain_subscription', function ($query) {
                $query->where('status', 'pending');
            })
            ->get();


        return view('admin.orders',compact('orders'));
    }
    public function cancel_order($subs_id,$type)
    {
        if ($type == 1){
            $subscription = Subscription::find($subs_id);
        } else if($type == 2){
            $subscription = DomainSubscription::find($subs_id);
        } else{
            $subscription = VpsSubscription::find($subs_id);
        }
        $subscription->update(['status' => 'cancelled']);

        return back();
    }
    public function active(Request $request,$subs_id)
    {
        try {
            $validData = $request->validate([
                'user_host' => 'required|string|max:255',
                'password_host' => 'required|string|max:255',
                'link' => 'required|string|max:255',
            ]);
            $subscription = Subscription::find($subs_id);

            $subscription->update([
                'user_host' => $validData['user_host'],
                'password_host' => $validData['password_host'],
                'cpanel_link' => $validData['link'],
                'status' => 'active',
            ]);

            return back()->with('notify', [
                'type' => 'success',
                'content' => 'Subscription Order Active Successfully!',
            ]);
        } catch (Exception $e) {
            return back()->with('error', 'Failed to active order: ' . $e->getMessage());
        }
    }
    public function active_domain(Request $request,$subs_id)
    {

        try {
            $validData = $request->validate([
                'dns1' => 'required|string|max:255',
                'dns2' => 'required|string|max:255',
                'dns3' => 'required|string|max:255',
                'dns4' => 'required|string|max:255',
            ]);
            $subscription = DomainSubscription::find($subs_id);
            $validData['status'] = 'active';

            $subscription->update($validData);

            return back()->with('notify', [
                'type' => 'success',
                'content' => 'Subscription Domain Order Active Successfully!',
            ]);
        } catch (Exception $e) {
            return back()->with('error', 'Failed to active order: ' . $e->getMessage());
        }
    }
    public function active_vps(Request $request,$subs_id)
    {
        try {
            $validData = $request->validate([
                'user' => 'required|string|max:255',
                'password' => 'required|string|max:255',
                'ip' => 'required|string|max:255',
            ]);
            $subscription = VpsSubscription::find($subs_id);
            $validData['status'] = 'active';

            $subscription->update($validData);

            return back()->with('notify', [
                'type' => 'success',
                'content' => 'Vps Subscription Order Active Successfully!',
            ]);
        } catch (Exception $e) {
            return back()->with('error', 'Failed to active order: ' . $e->getMessage());
        }
    }
    public function list(){

        $orders = Order::with( 'customer.user', 'plan',
            'domain_plan', 'vps_plan', 'vps_subscription', 'domain_subscription','subscription' )->get();

        return view('admin.order-list',compact('orders'));
    }
}
