<?php

namespace App\Http\Controllers;

use App\Models\Color;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $products = Product::with('categories')->get();
        // dd($product);
        return view('pages.home', compact('products'));
    }

    public function dashboard()
    {
        $productCount = Product::count();
        $categoryCount = Category::count();
        $colorCount = Color::count();

        return view('admin.dashboard', compact('productCount', 'categoryCount', 'colorCount'));
    }
}
