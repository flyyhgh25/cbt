<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Inertia\Inertia;

class UserController extends Controller
{
    public function registerPage()
    {
        return Inertia::render('Auth/Register');
    }
    public function loginPage()
    {
        return Inertia::render('Auth/Login');
    }
    public function handleRegister(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255|min:3',
            'email' => 'required|email|unique:users,email',
            'no_identity' => 'required|integer|unique:users',
            'password' => 'required|min:6',
        ]);
        $validated['password'] = Hash::make($validated['password']);
        User::create($validated);
        return redirect()->route('login');
    }

    public function handleLogin(Request $request)
    {
        $request->validate([
            'no_identity' => 'required|integer',
            'password' => 'required|min:6',
        ]);
        // IP limitation
        $throttleKey = Str::lower($request->no_identity) . '|' . $request->ip();
        if (RateLimiter::tooManyAttempts($throttleKey, 5)) {
            $time = RateLimiter::availableIn($throttleKey);
            return back()->withErrors([
                'no_identity' => 'Terlalu banyakk percobaan login! Silahkan coba lagi dalam' . $time . 'detik'
            ]);
        }
        if (!Auth::attempt($request->only('no_identity', 'password'))) {
            RateLimiter::hit($throttleKey, 60);
            return back()->withErrors([
                'no_identity' => 'NPM atau password salah'
            ]);
        }
        RateLimiter::clear($throttleKey);
        $request->session()->regenerate();
        return redirect()->route('dashboard');
    }

    public function handleLogout()
    {
        //
    }
}
