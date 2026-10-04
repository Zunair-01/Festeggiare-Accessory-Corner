@extends('user.layouts.app')

@section('title', 'Checkout')

@section('custom.css')
@include('user.partials.checkout_style')
@endsection

@section('content')
<div class="container checkout-container">
    <div class="row">
        <div class="col-md-6 checkout-details">
            <h2 class="checkout-title">{{ $product->product_name }}</h2>
            <div class="checkout-price">
                Product Price: Rs.{{ $product->product_price }}
            </div>
            <div class="checkout-quantity">
                Product Quantity: {{ $quantity }}
            </div>
            <div class="checkout-shipping">
                Shipping Cost: Rs.{{ $shippingCost }}
            </div>
            <div class="total-price">
                Total: Rs.{{ $totalPrice }}
            </div>
        </div>
        <div class="col-md-6">
            <form action="{{ route('payment.process') }}" method="POST" class="payment-form" id="payment-form">
                @csrf
                <input type="hidden" name="product_id" value="{{ $product->id }}">
                <input type="hidden" name="quantity" value="{{ $quantity }}">
                <input type="hidden" name="total_price" value="{{ $totalPrice }}">
                <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
                <div class="form-group">
                    <label for="payment_method">Payment Method</label>
                    <select class="form-control" id="payment_method" name="payment_method" required>
                        <option value="cod">Cash on Delivery</option>
                        <option value="online">Online Payment</option>
                    </select>
                </div>
                <div id="online-payment-fields" class="d-none">
                    <div class="form-group">
                        <label for="card-element">Credit or Debit Card</label>
                        <div id="card-element" class="card-element">
                            <!-- A Stripe Element will be inserted here. -->
                        </div>
                        <small id="card-errors" role="alert" class="form-text text-danger"></small>
                    </div>
                </div>
                <button type="submit" class="btn payment-btn"><i class="fas fa-credit-card"></i> Pay Now</button>
            </form>
        </div>
    </div>
</div>
@endsection

@section('custom.js')
@include('user.partials.checkout_scripts')
@endsection
