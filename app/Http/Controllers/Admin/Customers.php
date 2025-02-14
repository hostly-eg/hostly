<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Customer;

class Customers extends Controller
{
    public function index()
    {
        $customers = Customer::with('user','orders')->get();

        return view('admin.customers',compact('customers'));
    }
}
