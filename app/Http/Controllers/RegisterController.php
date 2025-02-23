<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Mail\WelcomeMail;
use App\Models\Customer;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;

class RegisterController extends Controller
{
    public function store()
    {
        $validatedData = request()->validate([
            'name' => ['required', 'string', 'max:50'],
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'password' => [
                'required','min:8','max:50','confirmed','regex:/[a-z]/','regex:/[A-Z]/','regex:/[0-9]/','regex:/[@$!%*#?&]/'
            ],
            'accept_terms' => ['required'],
            'phone' => ['required', 'string', 'max:11'],
            'address' => ['required', 'string', 'max:100'],
        ], [
            'name.required' => 'The name field is required.',
            'name.string' => 'The name must be a valid string.',
            'name.max' => 'The name must not exceed 50 characters.',

            'email.required' => 'The email field is required.',
            'email.email' => 'The email must be a valid email address.',
            'email.unique' => 'This email is already taken.',

            'password.required' => 'The password field is required.',
            'password.min' => 'The password must be at least 8 characters long.',
            'password.max' => 'The password must not exceed 50 characters.',
            'password.confirmed' => 'The password confirmation does not match.',
            'password.regex' => 'The password must contain at least one lowercase, one uppercase letter, one number, and one special character.',
            'accept_terms.required' => 'You must accept the terms and conditions.',
            'phone.required' => 'The phone field is required.',
            'phone.string' => 'The phone must be a valid string.',
            'phone.max' => 'The phone must not exceed 11 characters.',
            'address.required' => 'The address field is required.',
            'address.string' => 'The address must be a valid string.',
            'address.max' => 'The address must not exceed 100 characters.',
        ]);
        $user = User::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'password' => Hash::make($validatedData['password']),
            'role' => 'customer',
            'token' => Str::random(80),
            'remember_token' => Str::random(80),
        ]);

        $data=[
            'address' => $validatedData['address'],
            'phone' => $validatedData['phone'],
            'user_id' => $user->id,
        ];
        $customer=Customer::create($data);

        Mail::to($user->email)->send(new WelcomeMail($user));
        Auth::login($user, true);
        return redirect('/')->with(['success', 'Your account has been created.']);
    }
}
