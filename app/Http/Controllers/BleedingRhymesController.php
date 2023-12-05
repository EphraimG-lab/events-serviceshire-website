<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BleedingRhymesController extends Controller
{

    // Show Bleeding Rhymes About Page
    public function about() {
        return view('bleeding_rhymes.about');
    }
    // Show Bleeding Rhymes Contact Page

    public function contact() {
        return view('bleeding_rhymes.contact');
    }
     // Show Bleeding Rhymes Index Page
     public function index() {
        return view('bleeding_rhymes.index');
    }
      // Show Bleeding Rhymes Service Page
      public function service() {
        return view('bleeding_rhymes.service');
    }

     // Show Bleeding Rhymes Sign in Page
     public function login() {
        return view('bleeding_rhymes.sign-in');
    }
     // Show Bleeding Rhymes Events Page
     public function events() {
        return view('bleeding_rhymes.events');
    }
     // Show Bleeding Rhymes Sign Up  Page
     public function register() {
        return view('bleeding_rhymes.sign-up');
    }

     // Store Bleeding Rhymes User in a database
     public function store() {

        //
    }
    
}
