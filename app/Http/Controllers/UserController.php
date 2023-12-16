<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

use Illuminate\Support\Facades\Auth;
class UserController extends Controller
{
    
    public function register(Request $request)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'mobile' => 'required',
            'city' => 'required',
            'dob' => 'required',
            'gender' => 'required',
            'password' => 'required|min:3',
        ]);

        // Check if the user with the provided email already exists
        $existingUser = User::where('email', $request->email)->first();
        if ($existingUser) {
            return back()->withInput()->withErrors(['email' => 'The email is already registered.']);
        }

        // Create a new user object
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->mobile = $request->mobile;
        $user->city = $request->city;
        $user->dob = $request->dob;
        $user->gender = $request->gender;
        $user->password = $request->password; // Assuming the password is already hashed

        // Save the user record to the database
        $user->timestamps = false; // Disable automatic timestamp handling
        $user->save();

        // Flash a success message to the session
        session()->flash('success', 'Registration successful!');

        // Redirect to the home page
        return redirect('/home');
    }
    public function edit()
    {
        $user = Auth::user(); // Retrieve the authenticated user
        
        return view('edit-form', ['user' => $user]);
    }

    public function update(Request $request)
    {
        $user = Auth::user(); // Retrieve the authenticated user
    
        // Validate and update user credentials
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $user->id,
            'mobile' => 'required|string',
            'city' => 'required|string',
            'dob' => 'required|date',
            'gender' => 'required|string',
            'password' => 'nullable|string|min:6|',
        ]);
    
        // Update user details
        $user->name = $validatedData['name'];
        $user->email = $validatedData['email'];
        $user->mobile = $validatedData['mobile'];
        $user->city = $validatedData['city'];
        $user->dob = $validatedData['dob'];
        $user->gender = $validatedData['gender'];
        $user->password = $validatedData['password'];
    
        $user->save();
    
        return redirect()->route('next.page')->with('success', 'Credentials updated successfully!');
    }
}

