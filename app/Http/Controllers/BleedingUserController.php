<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Tickets;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use PHPUnit\Framework\Attributes\Ticket;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class BleedingUserController extends Controller
{
    public function register()
    {
        return view('BleedingRhymesUser.sign-up');
    }
    public function login()
    {
        return view('BleedingRhymesUser.sign-in');
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
        return view('BleedingRhymesUser.cart');
    }
    public function buy()
    {
        
        $tickets = Tickets::all();
        return view('BleedingRhymesUser.buy-tickets', compact('tickets'));
    }
    public function buyTicket($id)
    {
        $ticket = Tickets::findOrFail($id);
        $cart = session()->get('cart', []);
        if (isset($cart[$id])) {
            // If the ticket is already in the cart, do not allow buying another one
            return redirect()->back()->with('error', 'You can only purchase one ticket at a time.
                                      Please remove the existing ticket from the cart before adding a new one.');
        }
        if(isset($cart[$id])) {
            $cart[$id]['quantity']++;
        } else {
            $cart[$id] = [
                "ticket_name" => $ticket->ticket_name,
                "quantity" => 1,
                "price" => $ticket->price,
                "offering_1" => $ticket->offering_1,
                "offering_2" => $ticket->offering_2,
                "offering_3" => $ticket->offering_3,
                "offering_4" => $ticket->offering_4,
                "offering_5" => $ticket->offering_5,
                "offering_6" => $ticket->offering_6,
            ];
        }
        
        session()->put('cart', $cart);
        return redirect()->back()->with('success', 'Ticket has been added to the cart!');
    }
    public function updateCart(Request $request)
    {
        if($request->id && $request->quantity) {
            $cart = session()->get('cart');
            $cart[$request->id]["quantity"] = $request->quantity;
            session()->put('cart', $cart);
            session()->flash('success', 'Ticket added to cart.');
        }
    }
   
    public function deleteProduct(Request $request)
    {
        if($request->id) {
            $cart = session()->get('cart');
            if(isset($cart[$request->id])) {
                unset($cart[$request->id]);
                session()->put('cart', $cart);
            }
            session()->flash('success', 'Ticket successfully deleted.');
        }
    }
     public function order(){
        //Order
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