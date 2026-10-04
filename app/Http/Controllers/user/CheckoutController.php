<?php

namespace App\Http\Controllers\User;
use Illuminate\Support\Facades\Log;
use Stripe\Charge;
use Stripe\Stripe;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Mail\OrderConfirmation;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class CheckoutController extends Controller
{
    public function showCheckoutForm(Request $request)
    {
        $productId = $request->query('product_id');
    $quantity = $request->query('quantity', 1);
    $product = Product::find($productId);

    if (!$product) {
        return back()->withErrors('Product not found.');
    }

    $shippingCost = 50; // Example shipping cost
    $totalPrice = $product->product_price * $quantity + $shippingCost;

    return view('user.checkout', compact('product', 'quantity', 'shippingCost', 'totalPrice'));

    }

    public function checkout(Request $request)
    {
        $request->validate([
            'product_id' => 'required|exists:product,id',
            'quantity' => 'required|integer|min:1'
        ]);

        $productId = $request->input('product_id');
        $quantity = $request->input('quantity');
        $userId = Auth::id();

        $product = Product::find($productId);
        $shippingCost = 50; // Example shipping cost
        $totalPrice = $product->product_price * $quantity + $shippingCost;

        return redirect()->route('checkout', [
            'product_id' => $productId,
            'quantity' => $quantity
        ]);
    }

    public function processPayment(Request $request)
{
    $request->validate([
        'product_id' => 'required|exists:product,id',
        'quantity' => 'required|integer|min:1',
        'payment_method' => 'required',
        'stripeToken' => 'required_if:payment_method,online',
    ]);

    $product = Product::find($request->product_id);
    $user = Auth::user();
    $quantity = $request->quantity;
    $totalPrice = $product->product_price * $quantity + 50; // Assuming $shippingCost is fixed or dynamically retrieved

    if ($request->payment_method === 'online') {
        Stripe::setApiKey(config('services.stripe.secret'));

        try {
            $charge = Charge::create([
                'amount' => $totalPrice * 100, // Amount in cents
                'currency' => 'usd',
                'description' => 'Order payment',
                'source' => $request->stripeToken,
            ]);
        } catch (\Exception $e) {
            return back()->withErrors('Error!' . $e->getMessage());
        }
    }

    // Save the order in the database
    $order = Order::create([
        'user_id' => $user->id,
        'product_id' => $product->id,
        'quantity' => $quantity,
        'total_price' => $totalPrice,
        'payment_method' => $request->payment_method,
        'status' => 'Processing', // Make sure 'Processing' matches the column definition
    ]);

    // Send email to the user
    try {
        Mail::to($user->email)->send(new OrderConfirmation($order));
    } catch (\Exception $e) {
        // Log the error or handle as needed
        Log::error('Failed to send order confirmation email: ' . $e->getMessage());
    }

    return redirect()->route('payment.success');
}

    public function paymentSuccess()
    {
        return view('user.payment-success');
    }
}
