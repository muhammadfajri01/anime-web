<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function loginProcess(Request $request)
    {
        // dd($request->all());

        $request->validate([
            'name' => 'required',
            'password' => 'required',
        ]);

        $data = [
            'name' => $request->name,
            'password' => $request->password
        ];

        if (auth()->attempt($data)) {
            return redirect()->route('dashboard');
        } else {
            return redirect()->route('login');
        }
    }

    public function logout()
    {
        auth()->logout();
        return redirect()->route('login');
    }
}
