<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('admin-login'); // Replace with the path to your login view
    }

    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'id' => 'required',
            'password' => 'required',
        ]);

        if ($validator->fails()) {
            $errors = $validator->errors()->all();
            $errorMessage = implode('\n', $errors);
            echo "<script>alert('$errorMessage');</script>";
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $id = $request->input('id');
        $password = $request->input('password');

        // Assign the valid ID, password, and isAdmin flag
        $validId = 'admin';
        $validPassword = 'admin';
        $isAdmin = true; // Indicate that admin is logging in

        if ($id === $validId && $password === $validPassword) {
            // Authentication successful
            auth()->loginUsingId(1, $isAdmin); // Log in user with ID 1 and isAdmin flag
            return redirect()->route('dash'); // Replace with your admin dashboard route
        } else {
            // Authentication failed
            echo "<script>alert('Invalid ID or password'); window.location.href='/alogin';</script>";
        }
    }
    
public function logout()
{
    // Perform logout logic...

    $user = Auth::user();
    
    // Log out the authenticated user from all other devices
 

    // Perform the logout
    Auth::logout();

    // Set the session variable to indicate the user is logged out
    Session::put('logged_out', true);

    return redirect()->route('alogin');
}
}
