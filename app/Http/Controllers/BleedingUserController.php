<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class BleedingUserController extends Controller
{
    public function register()
    {
        return view('BleedingRhymesUser/sign-up');
    }
    public function login()
    {
        return view('BleedingRhymesUser/sign-in');
    }
    public function store(Request $request)
    {
        $formFields = $request->validate([
            'name' => ['required', 'min:3'],
            'username' => ['required', 'min:3'],
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'phone' => ['required', 'min:3'],
            'company' => ['required', 'min:3'],
            'city' => ['required', 'min:3'],
            'password' => 'required|confirmed|min:6'
        ]);

        // Hash Password
        $formFields['password'] = bcrypt($formFields['password']);

        // Create User
        $user = User::create($formFields);

        // Login
        auth()->login($user);

        return redirect('/')->with('message', 'User created and logged in');
    }
    public function authenticate(Request $request)
    {
        $formFields = $request->validate([
            'username' => ['required'],
            'password' => 'required'
        ]);

        if (auth()->attempt($formFields)) {
            $request->session()->regenerate();

            return redirect('/')->with('message', 'You are now logged in!');
        }

        return back()->withErrors(['email' => 'Invalid Credentials'])->onlyInput('email');
    }

    public function cart()
    {
        return view('BleedingRhymesUser/cart');
    }
    public function buy()
    {
        return view('BleedingRhymesUser/buy-tickets');
    }
      // Show all listings
      public function index() {
        return view('listings.index', [
            'listings' => Listing::latest()->filter(request(['tag', 'search']))->paginate(6)
        ]);
    }


    // Logout User
    public function logout(Request $request)
    {
        auth()->logout();
 
        $request->session()->invalidate();
        $request->session()->regenerateToken();
 
        return redirect('/')->with('message', 'You have been logged out!');
    }
}