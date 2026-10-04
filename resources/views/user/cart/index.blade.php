@extends('user.layouts.app')

@section('title', 'Product Details')

@section('custom.css')
    @include('user.partials.cart_style')
@endsection

@section('content')
    <div class="container cart-container">
        <div class="row">
            @include('user.layouts.partials.error')
            @include('user.layouts.partials.msg')
            <!-- Product Image and Thumbnails -->
            <div class="col-md-6">
                <div class="product-image">
                    <img src="{{ asset($product->product_image) }}" alt="Product Image">
                </div>
            </div>

            <!-- Product Details -->
            <div class="col-md-6 product-details">
                <h2 class="product-title">{{ $product->product_name }}</h2>
                <div class="brand-info mt-3">
                    Brand: <a href="#">No Brand</a> | <a href="#">More Audio from No Brand</a>
                </div>
                <div class="promotion-banner mt-3">
                    <p class="text-muted mb-3">{{ $product->product_description }}</p>
                </div>
                <div class="product-price mt-3">
                    Rs.{{ $product->product_price }} <small class="text-muted"><del>Rs. 2500</del> -69%</small>
                </div>
                <div class="product-quantity mt-3">
                    <form action="{{ route('cart.add') }}" method="POST" class="d-inline-block mr-2">
                        @csrf
                        <input type="hidden" name="product_id" value="{{ $product->id }}">
                        <strong>Quantity:</strong>
                        <div class="input-group mt-2">
                            <span class="input-group-btn">
                                <button type="button" class="btn btn-default btn-number" data-type="minus"
                                        data-field="quantity">
                                    <span class="glyphicon glyphicon-minus"></span>
                                </button>
                            </span>
                            <input type="number" name="quantity" class="form-control input-number quantity-input"
                                   value="1" min="1" max="10"> <!-- Assuming max quantity is 10 -->
                            <span class="input-group-btn">
                                <button type="button" class="btn btn-default btn-number" data-type="plus"
                                        data-field="quantity">
                                    <span class="glyphicon glyphicon-plus"></span>
                                </button>
                            </span>
                        </div>
                        <div class="action-buttons mt-4">
                            <button type="submit" class="btn btn-custom add-to-cart-btn">Add to Cart</button>
                        </div>
                    </form>
                    <form id="buy-now-form" action="{{ route('checkout') }}" method="POST" class="d-inline-block">
                        @csrf
                        <input type="hidden" name="product_id" value="{{ $product->id }}">
                        <input type="hidden" id="buy-now-quantity" name="quantity" value="1">
                        <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                        <button type="submit" class="btn btn-custom buy-now-btn">Buy Now</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection

@section('custom.js')
    @include('user.partials.cart_scripts')
@endsection
