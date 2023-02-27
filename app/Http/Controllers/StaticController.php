<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticController extends Controller
{
    public function index(){
        return view('welcome');
    }
    public function about(){
        return view('about');
    }
    public function protofolio(){
        return "<h1> protofolio page</h1>";
    }
    public function contact(){
        return view('contact');
    }
}
