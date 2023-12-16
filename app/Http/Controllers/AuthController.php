<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Session;


class AuthController extends Controller
{
   
public function showForm()
{
    return view('userlogin');
}

public function login(Request $request)
{
    $credentials = $request->validate([
        'email' => 'required|email',
        'password' => 'required',
    ]);

    if (Auth::attempt($credentials)) {
        // Authentication successful
        $user = Auth::user();     
      
            // Authentication successful
            // Clear the session variable indicating the user is logged out
            Session::forget('logged_out');
            return redirect()->route('next.page');
    }
    
     else {
        // Authentication failed
        return back()->withInput()->withErrors(['wrong' => 'Wrong Id or Password']);
    }
}
public function logout()
{
    $user = Auth::user();
    
    // Log out the authenticated user from all other devices
 

    // Perform the logout
    Auth::logout();

    // Set the session variable to indicate the user is logged out
    Session::put('logged_out', true);

    return redirect()->route('login');
}









}