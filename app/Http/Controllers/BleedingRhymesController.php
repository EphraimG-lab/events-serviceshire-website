<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BleedingRhymesController extends Controller
{
    public function index(){
        return view("BleedingRhymesMain.index");
    }
    public function about(){
        return view("BleedingRhymesMain.about");
    }
    public function blog(){
        return view("BleedingRhymesMain.blog");
    }
    public function contact(){
        return view("BleedingRhymesMain.contact");
    }
    public function cookies(){
        return view("BleedingRhymesMain.cookies");
    }
    public function events(){
        return view("BleedingRhymesMain.events");
    }
    public function FAQs(){
        return view("BleedingRhymesMain.FAQs");
    }
    
    public function privacy(){
        return view("BleedingRhymesMain.privacy");
    }
    public function services(){
        return view("BleedingRhymesMain.services");
    }
    public function speakers(){
        return view("BleedingRhymesMain.speakersh");
    }
}