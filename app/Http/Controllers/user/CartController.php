<?php

namespace App\Http\Controllers\user;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    //
    public function index($id)
    {
        $product = Product::find($id);
        return view('user.cart.index', compact('product'));
    }
    public function addToCart(Request $request)
    {
        $product = Product::findOrFail($request->product_id);
        $cart = Cart::updateOrCreate(
            ['user_id' => Auth::id(), 'product_id' => $product->id],
            ['product_quantity' => $request->quantity]
        );

        return redirect()->back()->with('success', 'Product added to cart successfully!');
    }

    public function viewIndex()
    {
        $cartItems = Cart::where('user_id', Auth::id())->get();
        return view('user.cart.cartIndex', compact('cartItems'));
    }
    public function deleteFromCart($id)
    {
        $cartItem = Cart::where('user_id', Auth::id())->where('id', $id)->firstOrFail();
        $cartItem->delete();

        return redirect()->back()->with('success', 'Product removed from cart successfully!');
    }
}
