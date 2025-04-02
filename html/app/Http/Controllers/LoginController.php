<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        
        $request->validate([
            'name' => 'required',
            'password' => 'required',
        ]);

        // Attempt to log the user in
        if (Auth::attempt($request->only('name', 'password'))) {
            return redirect()->route('index'); 
        }

        // If authentication fails, redirect back with an error
        return back()->withErrors([
            'name' => 'These credentials do not match our records.',
        ]);
    }
}
