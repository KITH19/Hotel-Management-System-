<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class LogoutController extends Controller
{
  

public function logout()
{
    // Perform logout logic...

    // Set the session variable to indicate the user is logged out
    Session::put('logged_out', true);

    return redirect()->route('login');
}

}
