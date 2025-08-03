<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    function showRegisterForm()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate(
            [
                'name' => 'required|max:255|min:3',
                'username' => 'required|min:3|max:255|unique:users',
                'email' => 'required|email:dns|max:255|unique:users',
                'password' => 'required|min:5|max:255'
                // 'username' => '[required',
                // 'min:3',
                // 'max:255',
                // 'unique:users',
            ]
        );
        User::create($validatedData);

        // bisa makai request->session()->flash
        // $request->session()->flash('success', 'registration successful! Please login.');

        // atau sekalian bisa langsung redirect ke login
        return redirect('/login')->with('success', 'registration successful! Please login.');
        // return redirect('/')->with('success', 'Registration successful! Please login.');
        // dd('registrasi berhaisl');
    }
    // public function store()
    // {
    //     return request()->all();
    // }
    function showLoginForm()
    {
        return view('auth.login');
    }

    function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/dashboard');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }
}
