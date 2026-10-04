@extends('user.layouts.app')
@section('title', 'Profile Setup')
@section('custom.css')
@include('user.partials.dashboard_style')
@endsection


@section('content')
    <div class="card card-preview">
        <div class="card-inner">
            @include('user.layouts.partials.error')
            @include('user.layouts.partials.msg')

            <!-- Search Form -->
            <div class="search-form">
                <form action="{{ route('product.search') }}" method="GET" class="form-inline">
                    <input class="form-control" type="search" placeholder="Search products" aria-label="Search"
                        name="query" value="{{ request('query') }}">
                    <button class="btn btn-outline-primary" type="submit">Search</button>
                </form>
            </div>

            <div class="row">
                @foreach ($product as $product)
                    <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                        <div class="card card-bordered product-card">
                            <div class="product-thumb">
                                <a href="{{ route('cart.index', $product->id) }}">
                                    <img class="card-img-top" src="{{ asset($product->product_image) }}" alt="">
                                </a>
                                @if (Carbon\Carbon::parse($product->created_at)->lessThan(\Carbon\Carbon::parse($product->created_at)->addDay()))
                                    <ul class="product-badges">
                                        <li><span class="badge badge-success">New</span></li>
                                    </ul>
                                @endif
                            </div>
                            <div class="card-inner text-center">
                                <ul class="product-tags">
                                    <li><a
                                            href="{{ route('cart.index', $product->id) }}">{{ \App\Models\Category::where('id', $product->category)->value('category_name') ?? 'No Category' }}</a>
                                    </li>
                                </ul>
                                <h5 class="product-title"><a
                                        href="{{ route('cart.index', $product->id) }}">{{ $product->product_name }}</a></h5>
                                <div class="product-price text-primary h5">PKR. {{ $product->product_price }}</div>
                            </div>
                        </div>
                    </div><!-- .col -->
                @endforeach
            </div>
        </div>
    </div><!-- .card-preview -->
@endsection

@section('custom.js')
    <script>
        // Custom JavaScript if needed
    </script>
@endsection
