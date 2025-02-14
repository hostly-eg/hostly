<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Coupon;
use Illuminate\Http\Request;

class Coupons extends Controller
{
    public function index()
    {
        $coupons = Coupon::all();
        return view('admin.code-list',compact('coupons'));
    }
    public function create()
    {
        return view('admin.new-code');
    }
    public function store(Request $request)
    {
        $validatedData = $this->validateCoupon($request);

        try {
            Coupon::create($this->mapCouponData($validatedData));
            return back()->with('notify', [
                'type' => 'success',
                'content' => 'Coupon has been successfully created!',
            ]);
        } catch (Exception $e) {
            return back()->with('error', 'Failed to create Coupon: ' . $e->getMessage());
        }
    }
    public function update(Request $request, $id)
    {
        $validatedData = $this->validateCoupon($request);

        try {
            $coupon = Coupon::findOrFail($id);
            $coupon->update($this->mapCouponData($validatedData));
            return back()->with('notify', [
                'type' => 'success',
                'content' => 'Coupon has been successfully updated!',
            ]);
        } catch (Exception $e) {
            return back()->with('error', 'Failed to update Coupon: ' . $e->getMessage());
        }
    }

    public function destroy($id)
    {
        try {
            $coupon = Coupon::findOrFail($id);
            $coupon->delete();
            return back()->with('success', 'Hosting Coupon deleted successfully!');
        } catch (Exception $e) {
            return back()->with('error', 'Failed to delete Coupon: ' . $e->getMessage());
        }
    }

    private function validateCoupon(Request $request)
    {
        return $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric',
        ]);
    }

    private function mapCouponData($validatedData)
    {
        return [
            'name' => $validatedData['name'],
            'price_discount' => $validatedData['price'],
        ];
    }
}
