<?php

namespace App\Http\Controllers;

use App\Models\Services;
use Illuminate\Http\Request;

class BleedingRhymesController extends Controller
{
    public function index()
    {
        $services = Services::all();
        return view("BleedingRhymesMain.index",compact('services'));
    }
    public function about()
    {
        return view("BleedingRhymesMain.about");
    }
    public function blog()
    {
        return view("BleedingRhymesMain.blog");
    }
    public function contact()
    {
        return view("BleedingRhymesMain.contact");
    }
    public function cookies()
    {
        return view("BleedingRhymesMain.cookies");
    }
    public function events()
    {
        return view("BleedingRhymesMain.events");
    }
    public function FAQs()
    {
        return view("BleedingRhymesMain.FAQs");
    }
    
    public function privacy()
    {
        return view("BleedingRhymesMain.privacy");
    }
    public function services()
    {
        $services = Services::all();
        return view("BleedingRhymesMain.services",compact('services'));
    }


    public function book($id)
    {
        // Find the service by ID
        $service = Services::findOrFail($id);
    
        // Get the current booking from the session
        $book = session()->get('book', []);
    
        // Check if the service is already in the booking
        if(isset($book[$id])) {
            $book[$id]['quantity']++;
        } else {
            $book[$id] = [
                "service_id" => $service->id,
                "service_name" => $service->service_name,
                "quantity" => 1,
                "service_charges" => $service->service_charges,
                "service_description" => $service->service_description
            ];
        }
    
        // Update the booking in the session
        session()->put('book', $book);
    
        // Redirect to the 'book.view' route
        return redirect()->route('book.view')->with('success', 'Service has been booked!');
    }

    public function showBookView()
    {
        return view('BleedingRhymesMain.book');
    }


     /*--------------------------------------------------
        update Booked Controller
        ----------------------------------------------*/
        public function updateBookedService(Request $request)
        {
            if($request->id && $request->quantity) {
                $book = session()->get('book');
                $book[$request->id]["quantity"] = $request->quantity;
                session()->put('book', $book);
                session()->flash('success', 'Service booked Successfully.');
            }
        }
    
    
        /*--------------------------------------------------
            Delete Booked Service Controller
            ----------------------------------------------*/
       
        public function deleteBookedService(Request $request)
        {
            if($request->id) {
                $book = session()->get('book');
                if(isset($book[$request->id])) {
                    unset($book[$request->id]);
                    session()->put('book', $book);
                }
                session()->flash('success', 'Booked Service successfully deleted.');
            }
        }
    public function speakers()
    {
        return view("BleedingRhymesMain.speakers");
    }
}
