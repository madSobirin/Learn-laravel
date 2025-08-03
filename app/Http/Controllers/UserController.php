<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('users.index', ['users' => 'sobirin']);
    }

    public function show($id)
    {
        return view('users.show', ['id' => $id]);
    }

    public function create()
    {
        return view('users.create');
    }

    public function store(Request $request)
    {
        // Logic to store users data
        return redirect()->route('users.index');
    }
}
