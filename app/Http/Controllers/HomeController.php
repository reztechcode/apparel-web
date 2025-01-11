<?php

namespace App\Http\Controllers;

use App\Models\Color;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request){
        $query = $request->input('search');

        $products = Product::with('categories')
            ->with('size')
            ->when($query, function ($q) use ($query) {
                return $q->where('product_name', 'like', "%$query%");
            })
            ->get();
    
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
