<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showRegisterForm()
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
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email:dns'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/dashboard');
        }
        return back()->with('loginError', 'Login failed!');
        // dd('berhasil Login');



        // return back()->withErrors([
        //     'email' => 'The provided credentials do not match our records.',
        // ]);
    }

    public function logout(Request $request) {
        // Hapus sesi login
        auth()->logout();

        // Hapus semua sesi
        $request->session()->invalidate();

        // Regenerasi token CSRF
        $request->session()->regenerateToken();

        // Redirect ke halaman login atau home
        return redirect('/login');
    }
}
