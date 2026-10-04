<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class UserDashboardController extends Controller
{
    //
    function index()
    {
        $product = Product::all();
        return view('user.dashboard', compact('product'));
    }
    public function search(Request $request)
    {
        $query = $request->input('query');
        $product = Product::where('product_name', 'LIKE', "%{$query}%")
            ->orWhere('product_description', 'LIKE', "%{$query}%")
            ->get();

        return view('user.searchproduct', compact('product', 'query'));
    }
}
