<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BleedingUserController extends Controller
{
    public function register(){
        return view('BleedingRhymesUser/sign-up');
    }
    public function login(){
        return view('BleedingRhymesUser/sign-in');
    }
    public function create(){
        
    }
    public function cart(){
        return view('BleedingRhymesUser/cart');
    }
    public function buy(){
        return view('BleedingRhymesUser/buy-tickets');
    }
}