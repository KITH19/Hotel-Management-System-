<?php

namespace App\Http\Controllers;

// AdminController.php

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct()
{
    $this->middleware('preventBackHistory');
}
public function login(Request $request)
{
    $adminEmail = 'admin@example.com';
    $adminPassword = 'admin123';

    $credentials = $request->only('email', 'password');

    if ($credentials['email'] == $adminEmail && $credentials['password'] == $adminPassword) {
        // Authentication successful
        return redirect()->intended('/admin/dashboard');
    } else {
        // Authentication failed
        return redirect()->back()->with('error', 'Invalid login credentials');
    }
}
    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect('/admin/login');
    }
    public function dashboard()
    {
        return view('dashboard');
    }
}


