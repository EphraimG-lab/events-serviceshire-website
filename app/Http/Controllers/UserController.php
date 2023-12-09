<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Models\User;

class UserController extends Controller
{
    // Show Bleeding Rhymes Sign Up  Form  Page
    public function register()
    {
        return view('users.sign-up');
    }

    // Store Bleeding Rhymes User in a database after registering
    public function store(Request $request)
    {
        $formFields = $request->validate([
          'firstname' =>['required','min:3'],
          'lastname' =>['required','min:3'],
          'username' =>['required','min:3'],
          'contact' =>['required'],
          'email' =>['required','email',Rule::unique('users', 'email')],
          'password' => 'required|confirmed|min:6'
        ]);

        // Hash Password
        $formFields['password'] = bcrypt($formFields['password']);
      
        // Create User
        $user = User::create($formFields);

        // Login
        auth()->login($user);

        return redirect('/')->with('success', 'User created Successfully and logged in');
    }
    // Show Bleeding Rhymes Sign in Page
    public function login()
    {
        return view('users.sign-in');
    }
    //Authenticate User Details Bleeding Rhymes User After Sign In
    public function authenticate(Request $request)
    {
        $formFields = $request->validate([
            // 'username' =>['required','min:3'],
            
            'email' =>['required','email'],
            'password' => 'required'
             
          ]);  

          if (auth()->attempt($formFields)) {
            $request->session()->regenerate();

            return redirect('/')->with('success', 'You are now logged in!');
        }

        return back()->withErrors(['email' => 'Invalid Credentials'])->onlyInput('email');
    }

    // Logout User

    public function logout()
    {
        return view('logout');
    }
    
    public function signout(Request $request)
    {
        auth()->logout();
  
        $request->session()->invalidate();
          $request->session()->regenerateToken();
  
        return redirect('/')->with('success', 'You have been logged out!');
    }

}