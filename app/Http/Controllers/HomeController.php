<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;

class HomeController extends Controller
{
    public function index()
    {   
        $categories = Category::all();
        $products = Product::orderBy('price', 'asc')->latest()->take(3)->get();

        return view ('home.index', compact('categories', 'products'));
    }
}
