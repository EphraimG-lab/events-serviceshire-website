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
    
}
