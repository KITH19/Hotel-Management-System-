<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session;

use Illuminate\Support\Facades\Auth;

class NextPageController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        // Check if the user is logged in
        if (!Auth::check()) {
            // User is not logged in, redirect to the login page
            return redirect()->route('login');
        }

        // Check if the user is logged out (based on session variable)
        if (Session::get('logged_out')) {
            // User is logged out, redirect to the login page
            return redirect()->route('login');
        }

        // User is logged in and not logged out, proceed to render the profile page
        $user = Auth::user();
        return view('next-page', compact('user'));
    }
}
