<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function showLogin()
    {
        if (session('admin_authenticated')) return redirect()->route('admin.dashboard');
        return view('admin.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email'    => 'required|email',
            'password' => 'required|string',
        ]);

        $adminEmail = config('app.admin_email', env('ADMIN_EMAIL'));
        $adminPass  = config('app.admin_password', env('ADMIN_PASSWORD'));

        if ($request->email === $adminEmail && Hash::check($request->password, bcrypt($adminPass))
            || ($request->email === $adminEmail && $request->password === $adminPass)) {
            $request->session()->put('admin_authenticated', true);
            $request->session()->put('admin_email', $request->email);
            return redirect()->route('admin.dashboard');
        }

        return back()->withErrors(['email' => 'Invalid credentials.'])->withInput();
    }

    public function logout(Request $request)
    {
        $request->session()->forget(['admin_authenticated', 'admin_email']);
        return redirect()->route('admin.login');
    }
}
