<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Order;
use App\Models\Tickets;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\DB;
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
                "product_id" => $id,
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
    //   public function order(Request $request)
    // {
    //     // Retrieve cart data from session
    //     $cartItems = session('cart');
    
    //     // Validate cart data (if necessary)
    //     // ...
    
    //     // Create a new order
    //     $order = Order::create([
    //         'user_id' => auth()->user()->id,
    //         'product_id' => $cartItems['id'],
    //         'product_name' => $cartItems['ticket_name'],
    //         'product_price' => $cartItems['price'],
    //         'product_quantity' => $cartItems['quantity'],
    //     ]);    
    //     // Redirect to checkout
    //     return redirect()->route('/checkout')->with('success', 'Order placed successfully!');
    // }

    
    // public function order(Request $request){
    //     // Retrieve cart data
    //     $cartItems = session('cart');

    //     // Handle empty cart
    //     if (empty($cartItems)) {
    //         return redirect()->route('cart')->with('error', 'Your cart is empty.');
    //     }
             
    //     dd($cartItems);
        
    //     // Create orders for each item in the cart
    //     foreach ($cartItems as $item) {
    //         $order = Order::create([
    //             'user_id' => auth()->user()->id,
    //             'product_id' => $item['product_id'],
    //             'product_name' => $item['ticket_name'],
    //             'product_price' => $item['price'],
    //             'product_quantity' => $item['quantity'],
    //         ]);
    //     }

    //     // Clear cart after orders are created
    //     session()->forget('cart');

    //     // Redirect to checkout
    //     return redirect()->route('/checkout')->with('success', 'Order placed successfully!');
    // }

    public function order(Request $request)
    {
        // Retrieve cart data
        $cartItems = session('cart');

        // Handle empty cart
        if (empty($cartItems)) {
            return redirect()->route('cart')->with('error', 'Your cart is empty.');
        }

        // Inspect cart contents (uncomment for debugging)
        dd($cartItems);

        // Begin database transaction (optional)
        DB::beginTransaction();

        try {
            // Create orders for each item in the cart
            foreach ($cartItems as $item) {
                $order = Order::create([
                    'user_id' => auth()->user()->id,
                    'product_id' => $item['product_id'],
                    'product_name' => $item['ticket_name'],
                    'product_price' => $item['price'],
                    'product_quantity' => $item['quantity'],
                ]);

                // Inspect created order (uncomment for debugging)
                // dd($order);
            }

            

            // Commit transaction (optional)
            DB::commit();

            // Clear cart after order are created
            session()->forget('cart');

            // Redirect to checkout
            return redirect()->route('checkout')->with('success', 'Order placed successfully!');
        } catch (\Exception $e) {
            // Rollback transaction if any error occurs (optional)
            DB::rollBack();

            // Handle the exception and log the error
            // ...

            return redirect()->route('cart')->with('error', 'An error occurred while placing the order. Please try again.');
        }
    }
    // public function checkout(){
    //     return view('BleedingRhymesUser.checkout');
    // }
    
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
   

    // Logout User
    public function logout(Request $request)
    {
        auth()->logout();
 
        $request->session()->invalidate();
        $request->session()->regenerateToken();
 
        return redirect('/')->with('message', 'You have been logged out!');
    }
}