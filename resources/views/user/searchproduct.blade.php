@extends('user.layouts.app')
@section('title', 'Profile Setup')
@section('custom.css')
    <style>
        .product-card {
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            overflow: hidden;
        }

        .product-thumb img {
            border-radius: 10px 10px 0 0;
        }

        .product-badges {
            position: absolute;
            top: 10px;
            left: 10px;
        }

        .product-badges .badge {
            font-size: 0.75rem;
            padding: 0.25rem 0.5rem;
        }
    </style>
@endsection

@section('content')
    <div class="card card-preview">
        <div class="card-inner">
            @include('user.layouts.partials.error')
            @include('user.layouts.partials.msg')
    <h1>Search Results</h1>

    @if($product->isEmpty())
        <p>No posts found.</p>
    @else
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
                                    href="#">{{ \App\Models\Category::where('id', $product->category)->value('category_name') ?? 'No Category' }}</a>
                            </li>
                        </ul>
                        <h5 class="product-title"><a
                                href="html/product-details.html">{{ $product->product_name }}</a></h5>
                        <div class="product-price text-primary h5">PKR. {{ $product->product_price }}</div>
                    </div>
                </div>
            </div><!-- .col -->
        @endforeach
    </div>
    @endif
@endsection
@section('custom.js')
    <script>
        // Custom JavaScript if needed
    </script>
@endsection
