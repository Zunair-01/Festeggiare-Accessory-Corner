@extends('user.layouts.app')
@section('title', 'Shopping Cart')
@section('custom.css')
@include('user.partials.cartIndex_style')
@endsection


@section('content')
    <div class="container-fluid cart-container">
        <h2>Your Cart</h2>
        @include('user.layouts.partials.error')
        @include('user.layouts.partials.msg')
        <div class="row">
            <div class="col-md-8">
                @foreach ($cartItems as $cartItem)
                    <div class="cart-item">
                        <div class="row">
                            <div class="col-md-3">
                                <img src="{{ asset($cartItem->product->product_image) }}" alt="Product Image"
                                    class="img-fluid">
                            </div>
                            <div class="col-md-6 product-details">
                                <h4>{{ $cartItem->product->product_name }}</h4>
                                <p>{{ $cartItem->product->product_description }}</p>
                                <p>Quantity: <span class="badge badge-secondary">{{ $cartItem->product_quantity }}</span>
                                </p>
                            </div>
                            <div class="col-md-3 text-right">
                                <p class="product-price">Rs.{{ $cartItem->product->product_price }}</p>
                                <form action="{{ route('cart.delete', $cartItem->id) }}" method="POST"
                                    class="d-inline-block">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Remove</button>
                                </form>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="col-md-4">
                <div class="order-summary">
                    <h4>Order Summary</h4>
                    <!-- Order summary details can be added here -->
                </div>
            </div>
        </div>
    </div>
@endsection

@section('custom.js')
    @include('user.partials.cartIndex_scripts')
@endsection
