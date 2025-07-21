<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Session;

class CustomAuthController extends Controller
{
    public function login()
    {
        return view('login'); // login + register in one view
    }

    public function register()
    {
        return view('login');
    }

    public function registerUser(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:9',
        ]);

        User::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'password' => Hash::make($validatedData['password']),
        ]);

        return redirect()->route('login')->with('register_success', 'Registration successful!');
    }

    public function loginUser(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:9',
        ]);

        $user = User::where('email', $request->email)->first();

        if ($user) {
            if (Hash::check($request->password, $user->password)) {
                $request->session()->put('loginId', $user->id);
                return redirect()->route('dashboard')->with('login_success', 'Login successful!');
            } else {
                return back()->with('login_fail', 'Password not matched');
            }
        } else {
            return back()->with('login_fail', 'Email not registered');
        }
    }

    public function dashboard()
    {
        return view('dashboard'); // Create this view separately
    }
}
