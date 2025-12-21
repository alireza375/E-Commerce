<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    // public function index()
    // {
    //     return view('frontend.main_master');
    // }
     public function HomeMain(){
        $categories = Category::latest()->get();
        $products = Product::latest()->where('status', 1)->get();
        return view('frontend.main_master', compact('categories', 'products'));
    }
}
