<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    // public function index()
    // {
    //     return view('frontend.main_master');
    // }
     public function HomeMain(){
        return view('frontend.main_master');
    }
}
