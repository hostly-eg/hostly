<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SessionsController extends Controller
{
    public function store(Request $request)
    {
        $attributes = $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        if (Auth::attempt($attributes, request()->has('remember'))) {
            session()->regenerate();

            // Redirect based on role
            if (auth()->user()->role == 'admin') {
                return redirect(RouteServiceProvider::ADMIN)->with('success', 'You are logged in.');
            } else {
                return redirect(RouteServiceProvider::HOME)->with('success', 'You are logged in.');
            }
        }

        return back()->withErrors(['message' => 'Email or password invalid.']);
    }

    public function destroy()
    {
        // Log the user out
        Auth::logout();

        request()->session()->invalidate();
        request()->session()->regenerateToken();

        return redirect('/')->with('success', 'You\'ve been logged out.');
    }
}
